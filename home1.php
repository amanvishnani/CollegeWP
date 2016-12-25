<?php /* Template Name: Home 1*/ ?>

<?php get_header();?>

    <section class="main-content">
        <div class="row matchHeight-container">
            <div class="col-xs-12 col-md-6">
                <div class="content-slider-container box">
                    <div class="content-slider" data-animation="fade">
                        <div class="slides-container">
                            <div class="slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/slide_img/slider_small_1.jpg" alt="demo">

                                <div class="description">
                                    <div class="inner">
                                        <p class="title">Discover your potential then Exceed it</p>

                                        <p>
                                            Enthusiast saphire university presidential luxury silver cultered wine. University engraved regal symbolizing fashion benefactor impressive inspiring pleasure rare
                                        </p>

                                        <a href="#" class="custom-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/slide_img/slider_small_2.jpg" alt="demo">

                                <div class="description">
                                    <div class="inner">
                                        <p class="title">1 Discover your potential then Exceed it</p>

                                        <p>
                                            1 Enthusiast saphire university presidential luxury silver cultered wine. University engraved regal symbolizing fashion benefactor impressive inspiring pleasure rare
                                        </p>

                                        <a href="#" class="custom-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="slide">
                                <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/slide_img/slider_small_3.jpg" alt="demo">

                                <div class="description">
                                    <div class="inner">
                                        <p class="title">2 Discover your potential then Exceed it</p>

                                        <p>
                                            2 Enthusiast saphire university presidential luxury silver cultered wine. University engraved regal symbolizing fashion benefactor impressive inspiring pleasure rare
                                        </p>

                                        <a href="#" class="custom-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="block-courses block-with-date box">
                    <img class="img-responsive hidden-md" src="<?php bloginfo('template_url');?>/images/upcoming_1.jpg" alt="demo" />

                    <img class="img-responsive visible-md" src="<?php bloginfo('template_url');?>/images/upcoming_1_1.jpg" alt="demo" />

                    <div class="description">
                        <div class="inner">
                            <p class="title">Upcoming Courses</p>

                            <div class="date">
                                <span class="first number">2</span>

                                <span class="second number">8</span>

                                <span class="month">August</span>
                            </div>

                            <div class="text">
                                <p>Design &amp; Construction Conference</p>

                                <a href="#" class="custom-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row matchHeight-container">
            <div class="col-xs-12 col-md-6">
                <div class="text-block box P30 bg-0">
                    <p class="title h1">N°1 American University</p>

                    <div class="text">
                        <p>
                            Presidential upper polo opulent luxury symphony five-star benefiting sheer. Opera gentlemen politically cuisine gifted club rich yacht becoming caviar.<br />Brilliant in a five-star in grande sterling benefactor. Ambassador rich metropolitan townhome pleasure art cigar. With champagne topiary portfolio sport delegate. Plure with echelon reserved elegant reserved echelon society symphony. Brokerage sport cruise yacht private.
                        </p>
                    </div>

                    <a href="#" class="more-link colored"><i class="arrow"></i>Learn more</a>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="video-block box">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                            <div class="column-description P30 bg-2 corner">
                                <?php if(is_active_sidebar('sidebar')):?>
                                    <?php dynamic_sidebar('sidebar');?>
                                <?php endif; ?>
                                <a href="#" class="stat-link"><i class="icon-signal"></i><span>Statistics</span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                            <div class="video box" style="background-image: url(<?php bloginfo('template_url');?>/images/video_bg.jpg);">
                                <a class="video-btn" href="https://www.youtube.com/embed/1zG1iq9LZ2U" data-gallery="portfolio">Play Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="info-container">
                <div class="col-xs-12 col-md-4">
                    <div class="info-item P30 bg-7">
                        <h3 class="icon-graduation-cap"><span>Be part of US</span></h3>

                        <p>
                            High-rise gentlemen cultered. Stockmarket art sheer board gold wishlist cultered pedigree echelon.
                        </p>

                        <p>
                            Architectural wealth luxury pedigree club le cultered gentlemen doctoral. Le doctoral manor with.
                        </p>

                        <a href="#" class="more-link"><i class="arrow"></i>Learn more</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="info-item P30 bg-6">
                        <h3 class="icon-search"><span>Find Allies</span></h3>

                        <p>
                            Upper handmade pearl architectural cutlery distinctly extra travel presidential bonds status. Impresario ballroom sheer. Impressive distinctly townhome diamond. Suite silk metropolitan diamond crafted doctoral board politically suite butler.
                        </p>

                        <a href="#" class="more-link"><i class="arrow"></i>Learn more</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="info-item P30 bg-5">
                        <h3 class="icon-lifebuoy"><span>Get Support</span></h3>

                        <p>
                            Politically a silk distinctly sport repertoire theatre dynasty rare. World elegant elegant philanthropic ballroom university.
                        </p>

                        <a href="#" class="more-link"><i class="arrow"></i>Learn more</a>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer()?>