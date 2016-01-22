<div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="<?= base_url('assets/camtales/img/toure.jpg');?>" alt="">
                        <div class="carousel-caption">
                            <h4>WEEKEND TOURE</h4>
                            <p>Femi<small>(presenter)</small> Visits the National Musuem with crew. Updates to be uploaded live Stay for feeds</p>
                        </div>
                    </div>
                    <div class="item"><img src="<?= base_url('assets/camtales/img/gist.jpg');?>">
                        <div class="carousel-caption">
                            <h4>UNIVERSITY GIST</h4>
                            <p>EMEKA<small>(presenter)</small> Moving around to Schools in Ghana for Discussion. Stay posted for live updates coming soon</p>
                        </div>
                    </div>
                    <div class="item"><img src="<?= base_url('assets/camtales/img/shop.jpg');?>">
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
                        <div class="hero-unit"style="background-image: url(<?=  base_url('assets/camtales/img/present.jpg')?>);">
                            <h2>Presenters</h2>
                            <p>We have Presenters that are mandated to do just that you would prefer. So we approve the plan once you affirm to it.</p>
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
                                            <a href="<?= base_url('cam-tales/presenters/preview')?>" role="button"  class="thumbnail" data-toggle="modal">
                                                <img data-src="holder.js/300x200" src="<?= base_url('assets/camtales/img/thumb.jpg');?>" alt="">
                                            </a>                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <h4>Presenter</h4>
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
                                            <a href="<?= base_url('cam-tales/presenters/preview')?>" role="button"  class="thumbnail" data-toggle="modal">
                                                <img data-src="holder.js/300x200" src="<?= base_url('assets/camtales/img/thumb.jpg');?>" alt=""
                                                     style="width : 400%">
                                            </a>                        
                                        </li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <h4>Presenter</h4>
                                </div>
                            </div>
                        <?php } while ($count < 4) ?> 
                    </div>
                </div>

            </div>