<?php
/**
 * Created by PhpStorm.
 * User: Aman
 * Date: 12/24/2016
 * Time: 10:25 PM
 */
?>

<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes();?>> <!--<![endif]-->


<!-- Mirrored from idealui.com/tf/university/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Dec 2016 05:55:21 GMT -->
<head>
    <title><?php bloginfo('name');?> | <?php is_front_page()? bloginfo('description'):wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?php bloginfo('description');?>">
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.html">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/fontello.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/jquery.fs.boxer.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/responsive.css" type="text/css">
    <!-- / google font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>


    <!-- / color -->
    <link class="colors_style" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/color_style/color_1.css" type="text/css"/>
    <!-- / settings_box -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/settings_box/settings_box.css" type="text/css">

    <!-- Load jQuery
    ================================================== -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/device.min.js"></script>
</head>

<body class="bg-1">
<div id="main" class="container">
    <header id="header">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="header-item bg-0">
                    <div class="line">
                        <a href="index_2.html" id="header-logo"  class="site-logo">University</a>

                        <a href="#" class="custom-btn colored">Apply to University</a>
                    </div>

                    <div class="line">
                        <p id="header-slogan"><?php bloginfo('description');?></p>

                        <div class="social-btn">
                            <a class="icon-twitter-bird" href="#"></a>
                            <a class="icon-linkedin-rect" href="#"></a>
                            <a class="icon-facebook-rect" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="header-item bg-4">
                    <a id="menu-open" class="" href="javascript:void(0);">Open Menu<span></span></a>

                    <nav id="navigation" class="header-menu">
                        <ul>
                            <li>
                                <a href="faculties_1.html">Faculties</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="faculties_1.html">Faculties 1</a></li>
                                        <li><a href="faculties_2.html">Faculties 2</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="academics.html">Academics</a>
                            </li>

                            <li>
                                <a href="courses.html">Courses</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="courses_details.html">Courses Details</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="about.html">Pages</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="index_2.html">Home 2</a></li>
                                        <li><a href="login_2.html">Login 2</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <nav id="submenu" class="header-menu bg-2">
                        <ul>
                            <li><a href="campus_locations.html">Campus and locations</a></li>
                            <li><a href="directory.html">Directory</a></li>
                            <li><a href="study_advice.html">Study advice</a></li>
                            <li><a href="login.html"><i class="icon-user"></i>Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
