<?php $settings = get_settings(); ?>
<div role="main" class="main">

    <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload" data-bg-src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center;">
        <div class="container pb-5 my-3">
            <div class="row mb-4">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-color-dark text-10">İletişim</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="demo-business-consulting-3.html">Anasayfa</a></li>
                        <li class="active">İletişim</li>
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

    <section class="section section-height-3 bg-light border-0 pt-4 m-0 lazyload" data-bg-src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-6.jpg" style="background-size: 100%; background-repeat: no-repeat;">
        <div class="container py-4">
            <div class="row box-shadow-4 mx-3 mx-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="col-lg-6 px-0">
                    <div class="bg-light h-100">
                        <div class="d-flex flex-column justify-content-center p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <div class="pb-5 mb-4 mt-5 mt-lg-0">
                                <div class="d-flex flex-column flex-md-row align-items-center justify-content-center pe-lg-4">
                                    <img width="105" height="105" src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-4 mb-md-0'}" style="width: 105px;" />
                                    <div class="text-center text-md-start ps-md-3">
                                        <h2 class="font-weight-semibold text-6 mb-1"><?= $settings->company_name; ?></h2>
                                        <p class="text-3-5 mb-0"><?= $settings->adress; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-5 mb-lg-0">
                                <div class="col-auto text-center ms-xl-auto mb-4 mb-xl-0">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">Telefon</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25" src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a href="tel:<?= $settings->phone_1; ?>" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-5 ms-2"><?= $settings->phone_1; ?></a>
                                    </div>
                                </div>
                                <div class="col-auto text-center me-xl-auto">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">WHATSAPP İLETİŞİM</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25" src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a target="_blank" href="https://wa.me/90<?= $settings->whatsapp; ?>" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-5 ms-2">+90<?= $settings->whatsapp; ?></a>
                                    </div>
                                </div>
                                <div class="col-auto text-center pt-4 mt-5">
                                    <h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">E-POSTA GÖNDER</h3>
                                    <div class="d-flex">
                                        <img width="25" height="25" src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                        <a href="mailto:<?= $settings->email; ?>" class="text-color-dark text-color-hover-primary text-decoration-underline font-weight-semibold text-5-5 wb-all ms-2"><?= $settings->email; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="bg-dark h-100">
                        <div class="text-center text-md-start p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                            <h2 class="text-color-light font-weight-medium mb-4 mt-5 mt-lg-0">Bize Mesaj Gönderin</h2>
                            <p class="text-3-5 font-weight-medium mb-4">Bize mesaj göndererek hizmetlerimiz hakkında daha fazla bilgi edinebilirsiniz.</p>
                            <form class="contact-form form-style-4 form-placeholders-light form-errors-light mb-5 mb-lg-0" action="php/contact-form.php" method="POST">
                                <div class="contact-form-success alert alert-success d-none mt-4">
                                    <strong>Başarılı!</strong> Mesajınızı gönderdiniz.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4">
                                    <strong>Hata!</strong> TMesajınızı gönderirken bir sorun oluştu.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Lütfen Ad Soyad alanını doldurunuz." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="name" placeholder="* Ad Soyad" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <input type="email" value="" data-msg-required="Lütfen E-posta alanını doldurunuz." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email" placeholder="* E-Posta Adresiniz" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Lütfen mesajınızı yazınız.." rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Mesaj" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                            <span>GÖNDER</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps2" class="google-map m-0" style="height: 500px;">
        <?= $settings->google_map; ?>
    </div>

</div>