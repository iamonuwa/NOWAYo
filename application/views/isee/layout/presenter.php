<?php
$request = filter_input(INPUT_GET, "view");
?>
<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>CAM TALEs</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Le styles -->
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
            <link href="assets/css/docs.css" rel="stylesheet">
            <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">

            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src="assets/js/html5shiv.js"></script>
            <![endif]-->

            <!-- Le fav and touch icons -->
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
            <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
            <!--<link rel="shortcut icon" href="assets/ico/favicon.png">-->

            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/jquery.js"></script>
            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/bootstrap-dropdown.js"></script>
            <script src="assets/js/bootstrap-modal.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap-popover.js"></script>
            <script src="assets/js/bootstrap-alert.js"></script>
            <script src="assets/js/bootstrap-tooltip.js"></script>
            <script src="assets/js/holder/holder.js"></script>
            <script src="assets/js/bootstrap-collapse.js"></script>
            <script src="assets/js/bootstrap-transition.js"></script>
            <script src="assets/js/bootstrap-scrollspy.js"></script>


        </head>
        <script>
            $(function () {
                $("#carousel").carousel({
                    period: 5000,
                    duration: 1000,
                    effect: 'fade',
                    //                    height: 400,
                    controls: true,
                    markers: {
                        show: true,
                        type: "default",
                        position: "bottom-right"
                    }
                });
            });
            //            $('.carousel').carousel()
            //            interval: 200;
            //            pause: hover;
        </script>
        <body class=" ">
            <?php require_once './header.php'; ?>
            <div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="assets/img/toure.jpg"alt="">
                        <div class="carousel-caption">
                            <h4>WEEKEND TOURE</h4>
                            <p>Femi<small>(presenter)</small> Visits the National Musuem with crew. Updates to be uploaded live Stay for feeds</p>
                        </div>
                    </div>
                    <div class="item"><img src="assets/img/gist.jpg">
                        <div class="carousel-caption">
                            <h4>UNIVERSITY GIST</h4>
                            <p>EMEKA<small>(presenter)</small> Moving around to Schools in Ghana for Discussion. Stay posted for live updates coming soon</p>
                        </div>
                    </div>
                    <div class="item"><img src="assets/img/shop.jpg">
                        <div class="carousel-caption">
                            <h4>WEEKEND SHOPPING HANGOUT</h4>
                            <p>Sophie<small class="fg-gray">(presenter)</small> Moving to the mall this weekend to pickup some ladies stuff, join us </p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
            </div>
            <div class="container">
                <div class="container-fluid">
                    <div class="row ">


                    </div>
                    <div class="row-fluid fg-pink" >
                        <div class="hero-unit"style="background-image: url(assets/img/present.jpg);">
                            <h2>Presenters</h2>
                            <p>We have awesome presenters that are mandated to do just that you would prefer. Just let approve the plan</p>
                            <p><a><button class="btn btn-primary btn-large">Learn More</button></a></p>
                        </div>
                    </div>
                    <hr/>
                    <div class="row-fluid fg-pink">
                        <h1>Xplosive Planners</h1>
                        <i class="fg-pink icon-cog"></i>&nbsp;<small>Click on the presenters image see what he planning</small>
                        <hr/>
                    </div>
                    <div class="row-fluid">
                        <?php
                        $count = 1;
                        do {
                            $count++
                            ?>

                            <div class="span4 place_center">
                                <div class="row">

                                    <ul class="thumbnails">
                                        <li class="span12">
                                            <a href="#myModal" role="button"  class="thumbnail" data-toggle="modal">
                                                <img data-src="holder.js/300x200" src="assets/img/thumb.jpg" alt="">
                                            </a>                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <h4>Name of Presenter</h4>
                                </div>
                            </div>
                        <?php } while ($count < 4) ?>  
                    </div>
                    <div class="row-fluid">
                        <?php
                        $count = 1;
                        do {
                            $count++
                            ?>

                            <div class="span4 place_center">
                                <div class="row">

                                    <ul class="thumbnails">
                                        <li class="span12">
                                            <a href="#myModal" role="button"  class="thumbnail" data-toggle="modal">
                                                <img data-src="holder.js/300x200" src="assets/img/thumb.jpg" alt="">
                                            </a>                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <h4>Name of Presenter</h4>
                                </div>
                            </div>
                        <?php } while ($count < 4) ?> 
                    </div>
                </div>

                <?php require_once'./footer.php'?>
            </div>

        </body>
    </html>
</html>