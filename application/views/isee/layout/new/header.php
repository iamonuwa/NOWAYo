
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= isset($this->title) ? $this->title : "Nowayo Blogs"?></title>
    <meta name="description" content="Vanilla HTML Template For Bloggers">
    <meta name="author" content="Kraftt - Ugurcan Bulut">

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/style.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/slick.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/flexslider.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/magnific-popup.css')?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/camtales/isee/css/mobile.css')?>" type="text/css">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300italic,400italic,300,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>

<body class="home-style-one">

 <div class="preloader">
	<div class='loader'></div>
</div><!-- preloader-->

 <div class="sidebar-nav-mask sidebar-close-btn"></div>

<div class="wrapper">

    <!-- HEADER -->
    <header id="blog-header">

        <div class="header-top">
            <div class="container">
                <div class="col-md-4 col-sm-4 social-media-topbar">
                    <ul>
                        <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 brand-logo">
                    <h1>
                        <a href="index.html"><img src="<?=base_url('assets/camtales/isee/images/logo.png')?>" alt="nowayo"></a>
                        <span class="logo-text">NOWAYO - The number one Multi Bloggers Site</span>
                    </h1>
                </div>
                <div class="col-md-4 col-sm-4 navicons-topbar">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li><a href="#" class="sidebar-navigation-menu"><i class="fa fa-navicon"></i></a></li>
                        <li><a hre="#" class="" title="<?=$this->aauth->is_loggedin() ? $this->aauth->get_user()->fullname : 'Not Signed in'?>"><i class="fa fa-user"></i></a></li>
                        <li class="blog-search">
                            <div class="dropdown">
                                <form method="post" class="search-form">
                                    <input type="search" class="form-control" name="search" placeholder="Type to search and hit enter...">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </form>
                                <a title="Search" class="search-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- container -->
        </div><!-- header-top -->

        <div class="header-main-nav">
            <div class="container">
                <div class="main-nav-wrapper">
                    <div class="mobile-logo"><a href="<?=base_url('blogger')?>"><img src="<?=base_url('assets/camtales/isee/images/mobile-logo.png')?>" style="" alt="vanilla"></a></div>
                    <nav class="main-menu">
                        <ul>

                            <li class="menu-item menu-item-has-children"><a href="<?=base_url('blogger')?>">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="<?=base_url('blogger')?>">Featured</a></li>
                                    <li class="menu-item"><a href="#">Campus Swag</a></li>
                                    <!-- <li class="menu-item"><a href="index3.html">Home Style #3</a></li> -->
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children"><a href="#">Camtales</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="gallery.html">Contest</a></li>
                                    <!--<li class="menu-item"><a href="about-me.html">About Me</a></li>-->
                                    <!--<li class="menu-item"><a href="contact.html">Contact</a></li>-->
                                    <!--<li class="menu-item"><a href="archives.html">Archives</a></li>-->
                                    <li class="menu-item"><a href="#">Presenters</a>
                                        <!--<ul class="sub-menu">-->
                                        <!--<li><a href="standard-post.html">Standard Post</a></li>-->
                                        <!--<li><a href="slider-post.html">Slider Post</a></li>-->
                                        <!--<li><a href="gallery-post.html">Gallery Post</a></li>-->
                                        <!--<li><a href="quote-post.html">Quote Post</a></li>-->
                                        <!--<li><a href="audio-post.html">Audio Post</a></li>-->
                                        <!--<li><a href="video-post.html">Video Post</a></li>-->
                                        <!--</ul>-->
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a target="_blank" href="<?=base_url('')?>">News</a></li>
                            <li class="menu-item"><a href="#">Presenters</a></li>
                            <li class="menu-item"><a href="#">Career</a></li>
                            <li class="menu-item "><a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!-- main-menu -->
                </div><!-- main-nav-wrapper -->
            </div><!-- container -->
        </div><!-- header-main-nav -->

    </header>
