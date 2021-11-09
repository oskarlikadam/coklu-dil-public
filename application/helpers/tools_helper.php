<?php


function get_settings()
{

    $t = &get_instance();

//    $settings = $t->session->userdata("settings");

//    if(empty($settings)){

    $t->load->model("settings_model");

    $settings = $t->settings_model->get();

//    $t->session->set_userdata("settings", $settings);
//    }

    return $settings;
}

function get_new_products()
{

    $t = &get_instance();

    $t->load->model("new_product_model");

    $new_products = $t->new_product_model->get_all(
        array(
            "isActive" => 1,
            "rank ASC"
        )
    );

    return $new_products;
}

function banners()
{

    $t = &get_instance();

    $t->load->model("banner_model");

    $banners = $t->banner_model->get_all(
        array(
            "isActive" => 1
        ), "rank ASC"
    );

    return $banners;
}

function get_product_categories()
{

    $t = &get_instance();

    $t->load->model("product_category_model");

    $product_category = $t->product_category_model->get_all(
        array(
            "isActive" => 1,
            "rank ASC"
        )
    );

    return $product_category;

}


function get_category_title($category_id = 0)
{

    $t = &get_instance();

    $t->load->model("product_category_model");

    $category = $t->product_category_model->get(
        array(
            "id" => $category_id
        )
    );

    if ($category)
        return $category->title;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}

function get_category_url($category_id = 0)
{

    $t = &get_instance();

    $t->load->model("product_category_model");

    $category = $t->product_category_model->get(
        array(
            "id" => $category_id
        )
    );

    if ($category)
        return $category->url;
    else
        return "<b style='color:red'>Tanımlı Değil</b>";

}

function get_product_cover_image($product_id)
{

    $t = &get_instance();
    $t->load->model("product_image_model");
    $cover_image = $t->product_image_model->get(
        array(
            "isCover" => 1,
            "product_id" => $product_id
        )
    );

    if (empty($cover_image)) {
        $cover_image = $t->product_image_model->get(
            array(
                "product_id" => $product_id
            )
        );
    }

    return !empty($cover_image) ? $cover_image->img_url : "";
}

function get_new_product_cover_image($new_product_id)
{

    $t = &get_instance();
    $t->load->model("new_product_image_model");
    $cover_image = $t->new_product_image_model->get(
        array(
            "isCover" => 1,
            "product_id" => $new_product_id
        )
    );

    if (empty($cover_image)) {
        $cover_image = $t->new_product_image_model->get(
            array(
                "product_id" => $new_product_id
            )
        );
    }

    return !empty($cover_image) ? $cover_image->img_url : "";
}

function get_picture($path = "", $picture = "", $resolution = "50x50")
{


    if ($picture != "") {

        if (file_exists(FCPATH . "admin/uploads/$path/$resolution/$picture")) {
            $picture = base_url("admin/uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/images/no-image.png");

        }

    } else {

        $picture = base_url("assets/images/no-image.png");

    }

    return $picture;

}

function urldenIDcekme($url)
{
    $t =& get_instance();
    $t->load->model("product_category_model");
    $data = $t->product_category_model->get(
        array(
            "url" => $url,
        )
    );
    return $data->id;
}



// function dildegis($dil)
// {
//     $t =& get_instance();
//     $t->session->set_userdata('dil',$dil);
//     redirect($_SERVER['HTTP_REFERER']);
//
// } benim uydurduğum bişey burada çalışıp çalışmadığını bile bilmiyorum...