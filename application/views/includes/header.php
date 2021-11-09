<?php $settings = get_settings(); ?>
<?php $product_category = get_product_categories(); ?>
<header id="header" class="header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5">
                                    <li class="nav-item py-2 d-inline-flex z-index-1">
													<span class="d-flex align-items-center p-0">
														<span>
															<img width="25"
                                                                 src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/phone.svg"
                                                                 alt="Phone Icon" data-icon
                                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                           href="tel:<?= $settings->phone_1; ?>"
                                                           data-cursor-effect-hover="plus"
                                                           data-cursor-effect-hover-color="light"><?= $settings->phone_1; ?></a>
													</span>


                                        <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
														<span>
															<img width="25"
                                                                 src="<?= base_url("assets"); ?>/img/demos/business-consulting-3/icons/email.svg"
                                                                 alt="Email Icon" data-icon
                                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}"/>
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2"
                                                           href="mailto:<?= $settings->email; ?>"
                                                           data-cursor-effect-hover="plus"
                                                           data-cursor-effect-hover-color="light"><?= $settings->email; ?></a>
													</span>

                                    </li>
                                </ul>
                                <ul style="margin-left: 25px" class=" nav nav-pills">
                                    <li class="nav-item dropdown nav-item-left-border d-none d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">



                                        <a class="nav-link" href="<?= base_url();?>/dildegis/tr" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="<?= base_url("assets");?>/img/blank.gif" class="flag flag-tr" alt="Turkish" /> Türkçe
                                            <i class="fas fa-angle-down"></i>
                                        </a>


                                        <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="<?= base_url();?>/dildegis/tr"><img src="<?= base_url("assets");?>/img/blank.gif" class="flag flag-tr" alt="Turkis" /> Türkçe</a>
                                            <a class="dropdown-item" href="<?= base_url();?>/dildegis/en"><img src="<?= base_url("assets");?>/img/blank.gif" class="flag flag-us" alt="English" /> English</a>
                                            <a class="dropdown-item" href="<?= base_url();?>/dildegis/ru"><img src="<?= base_url("assets");?>/img/blank.gif" class="flag flag-ru" alt="Russian" /> Русский</a>
                                            <a class="dropdown-item" href="<?= base_url();?>/dildegis/ae"><img src="<?= base_url("assets");?>/img/blank.gif" class="flag flag-sa" alt="Arabic" /> عربي</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100">
                                <ul class="ps-0 ms-auto mb-0">
                                    <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                        Pazartesi - Cuma 08:30 - 19:00 / Cumartesi 08:30 - 14:00
                                    </li>

                                </ul>

                                <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    <li class="social-icons-instagram">
                                        <a href="http://www.instagram.com/" target="_blank" class="text-4"
                                           title="Instagram" data-cursor-effect-hover="fit"><i
                                                    class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter"
                                           data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" class="text-4"
                                           title="Facebook" data-cursor-effect-hover="fit"><i
                                                    class="fab fa-facebook-f"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="<?= base_url(); ?>l">
                                <img width="300" alt="<?= $settings->company_name; ?>"
                                     src="<?php echo get_picture("settings_v", $settings->logo, "330x70"); ?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link active" href="<?= base_url(); ?>">
                                                <?= $this->lang->line('anasayfa') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url("kurumsal"); ?>">
                                                <?= $this->lang->line('kurumsal') ?>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="nav-link dropdown-toggle"
                                               href="<?= base_url("urun-kategorileri"); ?>">
                                                <?= $this->lang->line('urunlerimiz') ?>
                                            </a>
                                            <ul class="dropdown-menu">

                                                <?php
                                                foreach ($product_category as $item) {
                                                    ?>
                                                    <li>
                                                        <a href="<?= base_url("urun-kategorileri/$item->url"); ?>"
                                                           class="dropdown-item"><?= $item->title; ?></a>
                                                    </li>

                                                <?php } ?>

                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url("hizmetler"); ?>">
                                                <?= $this->lang->line('hizmetlerimiz') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url("galeriler"); ?>">
                                                <?= $this->lang->line('galeri') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url("blog"); ?>">
                                                <?= $this->lang->line('blog') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="<?= base_url("iletisim"); ?>">
                                                <?= $this->lang->line('iletisim') ?>
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                        data-bs-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
</header>
