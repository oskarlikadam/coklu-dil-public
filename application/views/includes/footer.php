<?php $settings = get_settings(); ?>



<footer id="footer" class="border-top-0 m-0 lazyload" data-bg-src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-4.jpg" style="background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pt-3">
        <div class="row justify-content-between align-items-center py-5 mb-3">
            <div class="col-auto mb-4 mb-lg-0">
                <h2 class="font-weight-semibold text-color-light text-10 ls-0 mb-0">Makinalarımız hakkında daha bilgi alın.</h2>
            </div>
            <div class="col-auto">
                <a href="<?= base_url("urun-kategorileri"); ?>" class="btn btn-primary custom-btn-style-1 font-weight-medium btn-px-4 btn-py-2 text-4" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                    <span class="text-color-light">Bilgi Al</span>
                </a>
            </div>
        </div>
        <hr class="bg-color-light opacity-1 my-0">
        <div class="row pt-3 mt-5">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <a href="demo-business-consulting-3.html" class="text-decoration-none">
                    <img src="<?php echo get_picture("settings_v", $settings->footer_logo, "235x50"); ?>" class="img-fluid mb-4"  alt="" />
                </a>
                <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur fel. </p>
                <ul class="social-icons social-icons-clean social-icons-clean-with-border social-icons-medium social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter mx-2"><a href="http://www.twitter.com/" target="_blank" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <ul class="list list-icons list-icons-lg">
                    <li class="d-flex px-0 mb-1">
                        <img width="25" src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ms-2"><?= $settings->phone_1; ?></a>
                    </li>
                    <li class="d-flex px-0 mb-1">
                        <img width="25" src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="tel:8001234567" class="text-color-light font-weight-semibold text-3-4 ms-2"><?= $settings->fax; ?></a>
                    </li>
                    <li class="d-flex px-0 my-3">
                        <img width="25" src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        <a href="mailto:porto@portotheme.com" class="text-color-light font-weight-semibold text-3-4 ms-2"><?= $settings->email; ?></a>
                    </li>
                    <li class="d-flex font-weight-semibold text-color-light px-0 mb-1">
                        <img width="25" src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                        <?= $settings->adress; ?>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div id="googlemaps" class="google-map m-0" style="height: 190px;">

                    <?= $settings->google_map; ?>
                    
                </div>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-bold text-5">Gezinti</h4>
                <ul class="list list-icons list-icons-sm">
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="<?= base_url(); ?>" class="link-hover-style-1 ms-1"> Anasayfa</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="<?= base_url("kurumsal"); ?>" class="link-hover-style-1 ms-1"> Kurumsal</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="<?= base_url("urun-kategorileri"); ?>" class="link-hover-style-1 ms-1">Makinalarımız</a>
                    </li>
                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="<?= base_url("referanslar"); ?>" class="link-hover-style-1 ms-1"> Referanslar</a>
                    </li>

                    <li>
                        <i class="fas fa-angle-right text-color-default"></i>
                        <a href="<?= base_url("iletisim"); ?>" class="link-hover-style-1 ms-1"> İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright container bg-transparent">
        <div class="row pb-5">
            <div class="col-lg-12 text-center m-0">
                <hr class="bg-color-light opacity-1 mt-5 mb-4">
                <p class="text-3-4">Bu web sitesi <a target="_blank" href="https://creatikbilisim.com/"><b>Creatik Bilişim Agency</b></a><b>© 2021</b> tarafından üretilmiştir.</p>
            </div>
        </div>
    </div>
</footer>
