<?php $product_category = get_product_categories(); ?>

<section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
        </svg>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10 text-center">
                <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">FETHİ YILMAZ MAKİNA</h2>
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Ürün Kategorilerimiz</h3>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                   data-appear-animation-delay="750"></p>
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
             data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">

            <?php
            foreach ($product_category as $item) {
                ?>

                <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                    <a href="demo-business-consulting-3-services-detail.html"
                       class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card box-shadow-4">
                            <div class="card-img-top position-relative overlay overlay-show">
                                <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                    <h4 class="font-weight-semibold text-color-light text-6 mb-1"><?= $item->title; ?></h4>
                                    <div class="custom-crooked-line">
                                        <img width="154" height="26"
                                             src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                             alt="" data-icon
                                             data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                             style="width: 154px;"/>
                                    </div>
                                </div>
                                <img src="<?php echo get_picture("product_categories_v", $item->img_url, "1000x1000"); ?>"
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
        <div class="row">
            <div class="col text-center">
                <a href="demo-business-consulting-3-services.html"
                   class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                   data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                    <span>Kategoriler</span>
                </a>
            </div>
        </div>
    </div>
</section>