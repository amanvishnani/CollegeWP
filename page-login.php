<?php
/**
 * Created by PhpStorm.
 * User: Aman
 * Date: 12/25/2016
 * Time: 3:26 AM
 */

?>
<?php get_header();?>
<section class="main-content">
    <div class="page-title P30">
        <h2 class="fl-l">Login</h2>

        <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="content-intro content-intro_s2" style="background: url('<?php bloginfo('template_url');?>/images/slide_img/slider_big_6.jpg ')">
            </div>
        </div>
    </div>

    <div class="row matchHeight-container">
        <div class="col-xs-12 col-md-6">
            <div class="info-item box P30 bg-7" style="min-height: 515px;">
                <h1>University User Login</h1>

                <form class="info-form" method="post" action="../wp-login.php">
                    <p>
                        Sensible multi-purpose deserve a. Awesome sale lather have boast included double surrender space. Grown yours chocolatey. Available rich don't durable so warm prevents pennies appearance. Every newer crispy appreciate pop-top mild goodness snappy.
                    </p>

                    <input type="text" name="log" data-placeholder="Username">

                    <input type="password" name="pwd" data-placeholder="Password">

                    <p class="remeber">
                        <label><input name="a1" type="checkbox" value=""> <span></span> Remember Me</label>

                        <span class="fl-r"><a href="#">Please remind me password</a></span>
                    </p>

                    <button class="base-text-color" type="submit">Login</button>
                </form>
            </div>
        </div>

        <div class="col-xs-12 col-md-6">
            <div class="post-item box P30" style="min-height: 515px;">
                <h2 class="title">
                    <img src="<?php bloginfo('template_url');?>/images/logo.png" alt="demo">

                    Best students, from every kind of background
                </h2>

                <p>
                    Plush care anything save smile fat-free choose stimulates jiffy. Dual traditional never with deluxe however wave racy keeps flavored. Pop-top effervescent many mountain compact superior. Deluxe worthwhile more hit lost revolutionary keen money-back when tempt purchase.
                </p>

                <h5>University Membership</h5>

                <p>
                    With career on status townhome rare. Impresario suite university penthouse noble charity gilded designer reserved university. Cutlery caviar enthusiast wishlist on rich. Monogram aristocratic marquis guests lifestyle blissfull benefactor housekeeping expensive classical club benefiting.  Tailored architectural a yacht acumen benefactor sheer. Architectural pleasure elegant stockmarket ladies.Gilded pleasure philanthropic upper educated grande symbolizing cruise architectural genuine.
                </p>

                <a href="#" class="custom-btn big colored" style="margin-top: 10px;">Join Us Now</a>
            </div>
        </div>
    </div>

    <?php get_footer();?>
