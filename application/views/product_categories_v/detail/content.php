<div role="main" class="main">

    <section
            class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload"
            data-bg-src="<?= base_url("assets"); ?>/<?= base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg"
            style="background-size: cover; background-position: center;">
        <div class="container pb-5 my-3">
            <div class="row mb-4">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-color-dark text-10">Ürün Listesi</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="<?= base_url(); ?>">Anasayfa</a></li>
                        <li><a href="<?php echo base_url("urun-kategorileri");?>">ÜRÜN KATEGORİLERİ</a></li>
                        <li class="active">ÜRÜN LİSTESİ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
    </section>

    <div id="examples" class="container py-2">

        <div class="row">
            <div class="col">



                <div class="row">


                        <div class="row mt-lg-5">





                            <?php foreach ($results as $product) { ?>

                            <div class="col-lg-4">

                                <a href="<?php echo base_url("urun-detay/$product->url");?>">
												<span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-centered-info thumb-info-block">
													<span class="thumb-info-wrapper">

                                                         <?php
                                                         $image = get_product_cover_image($product->id);
                                                         // $image = ($image) ? base_url("admin/uploads/product_v/$image") : base_url("assets/images/default-image.png");
                                                         $image = get_picture("product_v", $image, "1000x1000");
                                                         ?>

														<img src="<?php echo $image; ?>" class="img-fluid" alt="<?php echo $product->url; ?>">
														<span class="thumb-info-title">
															<span class="thumb-info-inner text-dark"><?php echo $product->title; ?></span>
															<span class="thumb-info-type">DETAYLI İNCELE</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon bg-transparent"><i class="fas fa-plus text-primary"></i></span>
														</span>
													</span>
												</span>
                                </a>
                            </div>

                            <?php } ?>







                        </div>



                    </div>
                </div>


            </div>
        </div>

    </div>
<br>
<br>
<br>

</div>