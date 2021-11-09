<?php
defined('BASEPATH') or exit("No direct script access allowed");

class Home extends MY_Controller
{

    public $viewFolder = "";

    public function index()
    {
        // Anasayfa...

        $viewData = new stdClass();

        $this->load->model("slide_model");
        $slides = $this->slide_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $viewData->slides = $slides;
        $viewData->viewFolder = "home_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function dildegis($dil)
    {
        $this->session->set_userdata('dil',$dil);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function search()
    {

        $term = $this->input->get("term");

        // SELECT title as value, id from products WHERE title LIKE '%term%'
        $rows = $this->db->select("title as value, url, id")->like("title", $term)->get("products")->result_array();
        echo json_encode($rows);
    }

    public function product_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";

        $this->load->model("product_model");
        $this->load->library("pagination");

        $config["base_url"] = base_url("urun-listesi");
        $config["total_rows"] = $this->product_model->get_count();
        $config["uri_segment"] = 2;
        $config["per_page"] = 4;
        $config["num_links"] = 2;
        $config['first_link'] = FALSE;
        $config['last_link'] = FALSE;
        $config['first_tag_open'] = FALSE;
        $config['first_tag_close'] = FALSE;
        $config['last_tag_open'] = FALSE;
        $config['last_tag_close'] = FALSE;
        $config['prev_tag_open'] = '<ul class="pagination"><li class="page-item"><a class="page-link" href="javascript:void(0);"><i class=\'bx bx-chevron-left\'></i> Önceki Sayfa';
        $config['prev_tag_close'] = '</a></li></ul>';
        $config['next_tag_open'] = '<ul class="pagination"><li class="page-item"><a class="page-link" href="javascript:void(0);" aria-label="Next">Sonraki Sayfa <i class=\'bx bx-chevron-right\'>';
        $config['next_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item d-none d-sm-block"><a class="page-link" href="javascript:;">';
        $config['num_tag_close'] = '</a></li>';
        $config['cur_tag_open'] = '<ul class="pagination"><li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">';
        $config['cur_tag_close'] = '</span></span></li></ul>';
        // $config[""] = "";
        // $config[""] = "";

        $this->pagination->initialize($config);


        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;


        $viewData->results = $this->product_model->get_records(
            $config["per_page"],
            $page,
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );
        $viewData->links = $this->pagination->create_links();

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function product_detail($url)
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "product_detail_v";

        $this->load->model("product_model");
        $this->load->model("product_image_model");
        $this->load->helper("text");

        $viewData->product = $this->product_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );

        $viewData->product_images = $this->product_image_model->get_all(
            array(
                "isActive" => 1,
                "product_id" => $viewData->product->id,
            ),
            "rank ASC"
        );

        $viewData->other_products = $this->product_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->product->id
            ),
            "rand()",
            array("start" => 0, "count" => 3)
        );


        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function product_categories()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "product_categories_v";

        $this->load->model("product_category_model");

        $viewData->products = $this->product_category_model->get_all(
            array(
                "isActive" => 1,
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function product_categories_detail($url = "")
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "product_categories_v";
        $viewData->subViewFolder = "detail";

        $this->load->model("product_category_model");
        $this->load->model("product_model");

        $this->load->library("pagination");
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'pg';

        $config["base_url"] = base_url("urun-kategorileri/$url");
        $config["total_rows"] = $this->product_model->get_category_count(
            array(
                "isActive" => 1,
                "category_id" => urldenIDcekme($url)
            )
        );
        $config["uri_segment"] = 3;
        $config["per_page"] = 8;
        $config["num_links"] = 1;
        $config['first_link'] = 'İlk Sayfa';
        $config['last_link'] = 'Son Sayfa';
        $config['first_tag_open'] = '<li class="page-item page-link">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item page-link">';
        $config['last_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item page-link">';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item page-link">';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li class="page-item page-link">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item page-link active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        // $config[""] = "";
        // $config[""] = "";


        $this->pagination->initialize($config);
        if (empty($_GET["pg"])) {
            $page = 0;
        } else {
            $page = $_GET["pg"];
        }

        $viewData->results = $this->product_model->get_records(
            $config["per_page"],
            $page,
            array(
                "isActive" => 1,
                "category_id" => urldenIDcekme($url),
            ),
            "rank ASC"
        );
        $viewData->links = $this->pagination->create_links();

        $this->load->view("$viewData->viewFolder/$viewData->subViewFolder/index", $viewData);
    }

    public function new_product()
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "new_product_v";

        $this->load->model("new_product_model");

        $viewData->new_products = $this->new_product_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function new_product_detail($url)
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "new_product_detail_v";

        $this->load->model("product_model");
        $this->load->model("new_product_model");
        $this->load->model("new_product_image_model");
        $this->load->helper("text");

        $viewData->new_product = $this->new_product_model->get(
            array(
                "isActive" => 1,
                "url" => $url
            )
        );

        $viewData->new_product_images = $this->new_product_image_model->get_all(
            array(
                "isActive" => 1,
                "product_id" => $viewData->new_product->id,
            ),
            "rank ASC"
        );

        $viewData->other_products = $this->product_model->get_all(
            array(
                "isActive" => 1,
                "id !=" => $viewData->new_product->id
            ),
            "rand()",
            array("start" => 0, "count" => 3)
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function about_us()
    {

        $viewData = new stdClass();


        $viewData->viewFolder = "aboutus_v";

        $this->load->model("settings_model");
        $this->load->helper("text");

        $viewData->settings = $this->settings_model->get();


        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function references()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "references_v";

        $this->load->model("reference_model");

        $viewData->references = $this->reference_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function catalog_list()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "catalog_v";
        $this->load->model("catalog_model");

        /** Tablodan Verilerin Getirilmesi.. */
        $viewData->items = $this->catalog_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function contact()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function news()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "news_v";

        $this->load->model("news_model");

        $viewData->items = $this->news_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function image_gallery()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "image_gallery_v";

        $this->load->model("image_model");
        $viewData->images = $this->image_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );


        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function video_gallery()
    {

        $viewData = new stdClass();
        $viewData->viewFolder = "video_gallery_v";

        $this->load->model("video_model");
        $viewData->videos = $this->video_model->get_all(
            array(
                "isActive" => 1
            ),
            "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }
}
