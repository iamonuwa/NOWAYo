<?php
//if ($this->aauth->is_loggedin()) {
    ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3">
                <img src="<?= base_url('assets/camtales/img/picture5.png') ?>" alt="" />

            </div>
            <div class="span8">

                <div class="hero-unit fg-pink" style="background-image: url(<?= base_url('assets/camtales/img/present.jpg') ?>)">
                    <h1 style="color:white;">Presenter</h1>
                    <small >#presenter is a Party Freak,'I like hanging out in clubs and night parties with friends',</small>
                    <p>
                        <button class="btn">View Profile</button>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="row-fluid">
            <div class="hero-unit ">
                <h1>#Presenter Plans</h1> 
                <small>Would you like #presenter to engage in any of the following activity comment and suggest</small>
                <p>
                    <a href="<?=  base_url('cam-tales/presenters/event')?>"<button class="btn btn-primary btn-large">Learn More</button></a>
                </p>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="row-fluid">
            <div class="row padding20">
                <h3 class="well well-small">#Presenter Has Organized some events</h3>
                <small>Event name Pictures</small>
                <hr/>
            </div>

            <div class="span6" style="border-right: 1px solid gray; padding-right: 10px;" >
                <div class="span4">
                    <img src="<?= base_url('assets/camtales/img/picture5.png') ?>" class="span12">
                </div>
                <div class="span4">
                    <img src="<?= base_url('assets/camtales/img/picture5.png') ?>" class="span12">

                </div>
                <div class="span4">
                    <img src="<?= base_url('assets/camtales/img/picture5.png') ?>" class="span12">

                </div>
                </div>
                <div class="span4" >
                    <p><button class="btn btn-warning btn-large"><i class="icon-play"></i> Watch Videos</button></p>
                    <i class="icon-twitter"></i>
                </div>
            </div>
        </div>
        <?php
    
    ?>