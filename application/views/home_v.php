<!DOCTYPE html>
<html>
<head>

    <?php $this->load->view("includes/head"); ?>

</head>

<body data-plugin-cursor-effect>
<div class="body">


    <?php $this->load->view("includes/header"); ?>

    <div role="main" class="main">

        <?php $this->load->view("{$viewFolder}/slider"); ?>

        <div class="container" >


            <?php $this->load->view("{$viewFolder}/about_us"); ?>



        </div>

        <?php $this->load->view("{$viewFolder}/references"); ?>



        <?php $this->load->view("{$viewFolder}/products"); ?>




        <?php $this->load->view("{$viewFolder}/whyus"); ?>





    <!--    <div class="container">
            <div class="row align-items-center py-4 my-5 mb-lg-0 my-xl-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <h2 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4">Skills That Make a
                        Meaningful Difference for Your Business</h2>
                    <p class="text-3-5 pb-3 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast
                        ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat. </p>
                    <div class="progress-bars pb-4">
                        <div class="progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">STRATEGY ACCELERATION</span>
                            <span class="text-color-dark font-weight-semibold text-2">90%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%"></div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">REVENUE GROWTH</span>
                            <span class="text-color-dark font-weight-semibold text-2">80%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="80%"></div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">FIREWALK SALES</span>
                            <span class="text-color-dark font-weight-semibold text-2">50%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="50%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/generic/generic-4.jpg" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>

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
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE MEMBERS</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Amazing
                            Team</h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                            hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun
                            volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="1000">
                        <div class="owl-carousel owl-theme custom-dots-style-1 mb-0"
                             data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 5}}, 'margin': 20, 'loop': false, 'nav': false, 'dots': true}"
                             style="height: 512px;">
                            <div>
                                <a href="demo-business-consulting-3-team.html#john"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-1.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">John Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#robert"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-2.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Robert Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#jessica"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-3.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Jessica Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#monica"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-4.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Monica Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#chris"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-5.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">Chris Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="demo-business-consulting-3-team.html#john"
                                   class="custom-link-hover-effects text-decoration-none"
                                   data-cursor-effect-hover="plus">
                                    <div class="card border-0">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                                <div class="custom-crooked-line">
                                                    <img width="154" height="26"
                                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                         alt="" data-icon
                                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                         style="width: 154px;"/>
                                                </div>
                                            </div>
                                            <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/team/team-1.jpg" class="img-fluid"
                                                 alt="John Doe"/>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="text-color-hover-primary text-6 mb-0">John Doe</h4>
                                            <p class="text-3-5 mb-0">CEO and Founder</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-with-shape-divider position-relative bg-dark border-0 m-0">
            <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                     y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 "/>
                    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 "/>
                </svg>
            </div>
            <div class="position-absolute top-0 right-0 overlay overlay-show overlay-color-primary overlay-op-9 h-100 lazyload d-none d-md-block"
                 data-bg-src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-2.jpg"
                 style="width: 32%; background-size: cover; background-position: center;"></div>
            <div class="container">
                <div class="row align-items-center pt-5 pb-xl-5 mt-5">
                    <div class="col-md-7 col-lg-8 py-4 my-2 ms-md-3 ms-lg-0">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">GET IN TOUCH</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Send Us a Message
                            and Learn More About Our Services</h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                           data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                            hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet. </p>
                        <form class="contact-form form-style-4 form-placeholders-light form-errors-light appear-animation"
                              data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                              action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                           maxlength="100"
                                           class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                           name="name" placeholder="* Full Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="email" value="" data-msg-required="Please enter your email address."
                                           data-msg-email="Please enter a valid email address." maxlength="100"
                                           class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                           name="email" placeholder="* Email Address" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                              class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                              name="message" placeholder="* Message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter"
                                     data-appear-animation-delay="1250">
                                    <button type="submit"
                                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                            data-loading-text="Loading..." data-cursor-effect-hover="plus"
                                            data-cursor-effect-hover-color="light">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-3 border-0 m-0 lazyload"
                 data-bg-src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/backgrounds/background-3.jpg">
            <div class="container py-4">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">TESTIMONIALS</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">What People
                            Say</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter"
                         data-appear-animation-delay="750">
                        <div class="owl-carousel owl-theme custom-nav-style-1 nav-style-1 nav-svg-arrows-1 nav-outside custom-dots-style-2 bg-light box-shadow-4 mb-0"
                             data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true}, '768': {'items': 1}, '992': {'items': 1, 'nav': true, 'dots': false}, '1200': {'items': 1, 'nav': true, 'dots': false}}, 'loop': false, 'autoHeight': true}">
                            <div class="py-5 px-lg-5">
                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                                    <img width="40" height="40"
                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/left-quote.svg" alt="" data-icon
                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                         style="width: 40px;"/>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">Cras a
                                            elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo,
                                            vel efficitur felis ultrices non. Cras a elit sit amet leo acun volutpat.
                                            Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-bold text-5-5 negative-ls-1">- John Doe</strong>
                                        <p class="text-color-dark mb-0">Porto Founder</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5 px-lg-5">
                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                                    <img width="40" height="40"
                                         src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/left-quote.svg" alt="" data-icon
                                         data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                         style="width: 40px;"/>
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta,
                                            tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor
                                            sit amet, consectetur adipiscing elit.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-bold text-5-5 negative-ls-1">- John
                                                Smith</strong>
                                        <p class="text-color-dark mb-0">Porto Founder</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-5 my-4">
            <div class="row justify-content-center pt-3">
                <div class="col-lg-10 text-center">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">THE BLOG</h2>
                    <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Our Recent News</h3>
                    <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="750">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                        hendreriast ehicula leo, vel efficitur felis ultrices non. Cras a elit sit amet leo acun
                        volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel. </p>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center mb-4 appear-animation"
                 data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="demo-business-consulting-3-blog-post.html"
                       class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													18
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/blog/blog-1.jpg" class="img-fluid"
                                     alt="Lorem Ipsum Dolor"/>
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor
                                    sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27"
                                                 src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                 data-icon
                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                 style="width: 27px;"/>
										</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="demo-business-consulting-3-blog-post.html"
                       class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													15
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/blog/blog-2.jpg" class="img-fluid"
                                     alt="Lorem Ipsum Dolor"/>
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor
                                    sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27"
                                                 src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                 data-icon
                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                 style="width: 27px;"/>
										</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-9 col-md-6 col-lg-4">
                    <a href="demo-business-consulting-3-blog-post.html"
                       class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                        <div class="card border-0 box-shadow-4">
                            <div class="card-img-top position-relative overlay">
                                <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
											<span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
												<span class="position-relative z-index-2">
													12
													<span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
												</span>
											</span>
                                </div>
                                <img src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/blog/blog-3.jpg" class="img-fluid"
                                     alt="Lorem Ipsum Dolor"/>
                            </div>
                            <div class="card-body p-4">
                                <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">FINANCE</span>
                                <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">Lorem ipsum dolor
                                    sit a met, consectetur</h4>
                                <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
											View More
											<img width="27" height="27"
                                                 src="<?=base_url("assets"); ?>/img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                 data-icon
                                                 data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                 style="width: 27px;"/>
										</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        -->


    </div>



    <?php $this->load->view("includes/footer"); ?>

</div>
<?php $this->load->view("includes/include_script"); ?>

</body>
</html>