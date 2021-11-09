<?php $settings = get_settings(); ?>
<div role="main" class="main">

    <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload" data-bg-src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center;">
        <div class="container pb-5 my-3">
            <div class="row mb-4">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-color-dark text-10">Ürün Kategorileri</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="demo-business-consulting-3.html">Anasayfa</a></li>
                        <li class="active">ÜRÜNLERİMİZ</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
                <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
            </svg>
        </div>
    </section>


    <section class=" border-0 pb-5 m-0">

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10 text-center">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">FETHİ YILMAZ MAKİNA</h2>

                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="750"></p>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">

                <?php
                foreach ($products as $product) {
                    ?>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                        <a href="<?= base_url("urun-kategorileri/$product->url"); ?>"
                           class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1"><?= $product->title; ?></h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                 src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                 alt="" data-icon
                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                 style="width: 154px;"/>
                                        </div>
                                    </div>
                                    <img src="<?php echo get_picture("product_categories_v", $product->img_url, "1000x1000"); ?>"
                                         class="img-fluid"
                                         alt="Card Image"/>
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">Test Açıklamasıdır.</p>
                                    <img width="50" height="50" class="w-auto"
                                         src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/arrow-right.svg"
                                         alt="" data-icon
                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                         style="width: 50px;"/>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

            </div>

        </div>
    </section>

</div>