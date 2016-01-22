
            <?php 
 


?>
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
                    <div class="row fluid fg-pink" style="padding:2%">
                        <div  class="hero-unit"style="float: centre; width:85%;margin:2%; background-image: url(<?=  base_url('assets/camtales/img/present.jpg')?>);">
                            <h2>Presenters</h2>
                            <p>We have Presenters that are mandated to do just that you would prefer. So we approve the plan once you affirm to it.</p>
                            <p><a><button class="btn btn-primary btn-large">Learn More</button></a></p>
                        </div>
                    </div>
                    <div class="row fluid fg-pink span9" style="">
                        <h1>Bloggers</h1>
                        <i class="fg-pink icon-cog"></i>&nbsp;<small>NOWAYO Blogs are listed below</small>
                       
                    </div>
                    <div class="row fluid">

                        <?php
                        // $count = 0;
                        // for($count = 0; $count < count($all); $count++) 
                        // echo count($all);                            
                        foreach ($all as $key => $value) {
                            if(!empty($value['status']))
                            {                          
                        $image = $this->userutitlities->getImageById($value['image_id']);
                            $picture = $image['link'];
                            $comment = $this->userutitlities->countCommentId($value['id']);
                        
                            ?>
                            <div class="padding20">

                                <div class="row  well well-small" style="background-color: white">
                            
                            <div class="span3" style="background-color: transparent;">


                                    <!-- <ul class="thumbnails" style="padding:5px; " height="30px"> -->
                                        
                                            <a href="<?= base_url('isee/presenter/'.strtolower($value['presenter_id']))?>" role="button"  class="thumbnail" data-toggle="modal">

                                                <img data-src="" style="width: 140%; " src="<?= isset($picture) ? base_url('uploads/'.$picture): base_url('assets/camtales/img/thumb.jpg');?>" alt="">
                                          </a>  
                                    </div>
                                    <div class="span7">
                                    <div class="text-left" style="padding-top: 40px;">                              
                                                                
                                <h2><?= !empty($value['swag_name']) ? $value['swag_name'] : $value['name']?>'s Blog
                                <br/>
                                <h1  style="color: gray; font-size: 30px;"><strong><?= strtoupper($value['title'])?></strong></h1>
                                <small style="color:gray"> <?=$value['intro']?>...</small>
                                <h6 style="color: black"><?=$value['field']?> Blog &nbsp;|&nbsp;                           
                                <a href="<?= base_url('isee/presenter/'.strtolower($value['presenter_id']))?>"><small  style="color: black">click here to visit Blog</small></a></h6></h2>
                                 <small><i class="icon-eye-open"></i>&nbsp; 1.5k Views <?php //$value['views']?> &nbsp;| &nbsp; <?= $comment ?>  <i class="icon-edit"></i>&nbsp;Comments</small>                                



                                
                                
                                </div>

                                <!-- </ul> -->
                                

                                
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="span12"></div>
                            </div>
                        <?php }} ?>  
                    </div>
                    
                    <div class="row fluid padding20">
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
                    
            <?php } ?> 

                </div>
        </div>
    </div>

                </div>

            </div>