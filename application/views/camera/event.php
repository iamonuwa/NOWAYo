<?php
//if ($this->aauth->is_loggedin()) {
    ?>
    <div class="container-fluid">
        <div class="row-fluid shadow fg-gray">
            <div class="hero-unit" style="background-image: url(<?= base_url('assets/camtales/img/events2.jpg') ?>);">
                <h1 class="">Events</h1>

            </div>
        </div>
        <div class="row-fluid padding20">
            <div class="row well  well-small">
                <h3>Approved Events</h3>
                <small>Some events that will be going down soon!!! check out</small>
            </div>
            <div class="row-fluid padding20">
                <div class="span10 thumbnails">
                    <?php for ($index = 1; $index < 4; $index++) { ?>
                        <li class="span4 padding20">
                            <div class="row">
                                <a href="#" class="thumbnail">
                                    <img data-src="holder.js/300x200" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <h5>CAMPUS STORM</h5>
                                <small>with Femi</small>
                            </div>
                        </li>
                    <?php } ?>


                </div>
                <div class="row-fluid span10 thumbnails">

                    <?php for ($index = 1; $index < 4; $index++) { ?>
                        <li class="span4 padding20">
                            <div class="row">
                                <a href="#" class="thumbnail">
                                    <img data-src="holder.js/300x200" alt="">
                                </a>
                            </div>
                            <div class="row">
                                <h5>CAMPUS STORM</h5>
                                <small>with Femi</small>
                            </div>
                        </li>
                    <?php } ?>
                    <hr/>
                    <div class="row">
                        <button class="btn">View more</button>
                    </div>
                </div>

            </div>
            <div class="row-fluid padding20">
                <div class="span12">
                    <div class="row well well-small">
                        <h3>Presenters Event Concept</h3>
                        <small>Share your opinion comment, suggest cos highest <strong><i class="icon-minus"></i>like</strong> will be approved</small>
                    </div>
                </div>
                <?php for ($index = 1; $index < 4; $index++) { ?>
                    <div class="row-fluid">
                        <div class="span8 padding20">
                            <div class="media">
                                <a class="pull-left " href="#">
                                    <img class="media-object" data-src="holder.js/64x64" src="<?= base_url('assets/camtales/img/hangouts.png') ?>">
                                </a>
                                <div class="row media-body padding20">
                                    <h4 class="media-heading">CALABAR CARNIVAL <small>with Sasha</small></h4>
                                    An unforgettable Experience as we move down to calabar Carnival
                                    <!-- Nested media object -->
                                    <div class="media">
                                        100 <a href="#" class="fg-pink">Likes</a> &nbsp; 60 <a href="#" class="fg-pink">Deslikes</a> 10<a href="" class="fg-pink">&nbsp;Review Comments</a>
                                    </div>
                                </div>                       
                            </div>
                            <div class="row-fluid pull-left" >                            
                            <?php if ($this->aauth->is_loggedin()) { ?>
                                <form class="form-inline">
                                    <textarea class="span5"placeholder="Enter Comment"></textarea>
                                </form>
                                <button class="btn btn-primary">Submit Comment</button>
                            <?php }else{ ?>
                                <p><i class="icon-user"></i>&nbsp;sign in to comment</p>
                            <?php } ?>
                                                            </div> 

                        </div>
                        <div class="row-fluid span4 padding20">
                            <div class="progress">
                                <div class="bar" style="width: 60%;"></div>
                            </div>
                            <h5>Approval Status 50%</h5>
                            
                        </div>
                    </div>

                </div>
            <?php } ?> 
        </div>
    </div>

    </div>
    <?php
//} else {
//    header('location: ' . base_url('#login'));
//}
?>