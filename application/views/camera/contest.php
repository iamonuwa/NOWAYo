<?php ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7">
            <div id="carousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="<?= base_url('assets/camtales/img/story_1.jpg'); ?>" alt="">
                        <div class="carousel-caption">
                            <h4>CAM-TALES </h4>
                            <p>Image Story lets keep false poses and false image styles aside and Live real, let the image tell the story</p>
                        </div>
                    </div>
                    <div class="item"><img src="<?= base_url('assets/camtales/img/story_2.jpg'); ?>">
                        <div class="carousel-caption">
                            <h4>THE IMAGE OF CENTURIES</h4>
                            <p>Image with an explicit explanation of how you live your real life, Don't miss the Gift and prize awaiting you</p>
                        </div>
                    </div>
                    <div class="item"><img src="<?= base_url('assets/camtales/img/story_3.jpg'); ?>">
                        <div class="carousel-caption">
                            <h4>IMAGE STORY SEASON 1</h4>
                            <p>Who will be selected? Lets find out. Join the contest preview the selected users photos and decide by yourself who tells a story with images </p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <div class="span5">
            <div class="hero-unit">
                <h1>Contest</h1>
                <small>Quest to find the most Album Story Creator</small>
                <p><button class="btn btn-large btn-primary">Join Now!</button></p>
            </div>
        </div>
    </div>
    <div class="row well well-small padding20">
        <h3>Selected Albums</h3>
        <small>Images are randomly selected by the Administrator according to the CAMERA TALES</small>
    </div>
    <?php for ($index = 1; $index < 3; $index++) { ?>

        <div class="row-fluid">
            <div class="span2">
                <div class="thumbnails">
                    <div class="span12">
                        <img src="<?= base_url('assets/camtales/img/picture5.png') ?>">
                    </div>
                </div>
            </div>
            <div class="padding20"></div>
            <div class="span4">
                <h3>#USER #Othername</h3>
                <small><strong>320</strong> Photos in the Album </small>
                <a href="" class="fg-pink">View Pictures</a>
                <?php if ($this->aauth->is_loggedin()) { ?>

                    <p><a href="#"><button class="btn">Vote</button></a></p>
                <?php } else { ?>
                    <p><i class="icon-user"></i>&nbsp;sign in to <strong> Vote</strong></p>

                <?php } ?>
                <p><strong>20 Votes</strong></p>

            </div>
            <div class="span2">
                <div class="thumbnails">
                    <div class="span12">
                        <img src="<?= base_url('assets/camtales/img/picture5.png') ?>">
                    </div>
                </div>
            </div>
            <div class="span4">
                <h3>#USER #Othername</h3>
                <small><strong>320</strong> Photos in the Album </small>
                <a href="" class="fg-pink">View Pictures</a>
                <?php if ($this->aauth->is_loggedin()) { ?>

                    <p><a href="#"><button class="btn">Vote</button></a></p>
                <?php } else { ?>
                    <p><i class="icon-user"></i>&nbsp;sign in to <strong> Vote</strong></p>

                <?php } ?>
                <p><strong>20 Votes</strong></p>

            </div>
        </div>
    <?php } ?>

</div>
<div class="navbar-fixed-bottom padding20">
    <button class="btn"><i class="icon-question-sign"></i>&nbsp;Contact Us</button>
</div>