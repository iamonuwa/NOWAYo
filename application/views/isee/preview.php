<?php

// var_dump($posts);



$image = $this->userutitlities->getImageById($blog['image_id']);
$banner = $this->userutitlities->getImageById($blog['theme_id']);
$image_ban = $banner['link'];
$imaDisp = $image['link'];
    ?>

    <div class="container-fluid" style="background-color:">
    <div class="row">
    <?=isset($error) ? $error : "" ?>
    </div>
        <div class="row-fluid">
            <div class="span3">
                <img src="<?= !empty($imaDisp) ? base_url('uploads/'.$imaDisp): base_url('assets/camtales/img/picture5.png') ?>" alt="" />

            </div>
            <div class="span7">

                <div class="row-fluid hero-unit fg-pink" style="background-image: url(<?= base_url('assets/camtales/img/present.jpg') ?>); width: 100%; float: center;">

                    <h2 style="color:white;" ><?=!empty($blog['swag_name']) ? $blog['swag_name'] : $blog['name']?>'s Blog</h2>
                    <h3 style="color:white; box-shadow: 1px 2px 1px 0px red;"><small>Field of Interest:&nbsp;</small><?= $blog['field']?> </h3>
                    <p>
                        <button class="btn">View Profile</button>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <br/>
        <div class="span7">
        <div class="row-fluid">

                <div class="well" style="background-color: white;">
                <img style="width: 1200px; height: 220px;>"src="<?= !empty($image_ban) ? base_url('uploads/'.$image_ban): base_url('assets/imgs/ad.jpg')?>">
                <div class="well"  style="background-color: ;">
                <h2><?=$blog['title']?></h2> 
                <h6><?=$blog['intro']?><br/>
                <small class="">Posted on <?= date('F jS, Y h:i:s A',$blog['time_updated'])?></small></h6>

                <hr/>
                </div>                
                
                <hr/>
                <p class="lead"style="color: black;  text-align: justify;"><?=$blog['description']?></p>
                </div>
        </div>
        <div class="row fluid">
        <?php foreach ($posts as $key => $post){ 
            $imagePost = $this->userutitlities->getImageById($post['img_link_1'])

            ?>
         <div class="well" style="background-color: white;">
                <img style="width: 1200px; height: 220px;>"src="<?= !empty($imagePost['link']) ? base_url('uploads/'.$imagePost['link']): base_url('assets/imgs/ad.jpg')?>">
                <div class="well"  style="background-color: ;">
                <h2><?=$post['post_title']?></h2> 
                <small class="">Posted on <?= date('F jS, Y h:i:s A',$post['created'])?></small></h6>
                <hr/>
                </div>          
                <hr/>
                <p><?=$post['post_content']?>
                </p>
                </div>

        <?php } ?>
        </div>
        <div class="row padding20" style="padding-left:;">
        </div>
        
        <div class="row well well-small">
        <h5>Comments</h5>
        </div>
        <div class="row">

        <?php if(isset($comment)){
            foreach($comment as $comm){
                $user = $this->userutitlities->getUserDetails($comm['user_id']);
            ?>
            <h6><?=$user['fullname']?> <small><br/>commented on this post.</small>
            <small>on <?= date('F jS, Y h:i:s A',$comm['comment_id'])?></small></h6>
            <?=$comm['comment']?>
            <hr/>


        <?php } }else{?>
        <h4>No Comment</h4>

        <?php }?>
<hr/>
        </div>
        <?php if($this->aauth->is_loggedin()){;
        ?>
        <form action="<?=base_url('isee/get_presenter/'.$blog['presenter_id'])?>" method="POST">
        <div class="row">
        <h5><img src="<?=base_url('uploads/'.$this->aauth->get_user()->profile_picture)?>" class="img-circle" style="width:6%">&nbsp;<?=$this->aauth->get_user()->fullname;?></h5>
        </div>
        <fieldset>
            <textarea type="text" class="span6" name="comment" title="Enter Comment" placeHolder="Share your Comment" required></textarea>
        </fieldset>
        <input name="userId" value="<?=$this->aauth->get_user()->id?>" type="hidden">
        <input name="post_id" value="<?=$blog['id']?>" type="hidden">
        <input class="btn btn-success span6" type="submit" value="Post" name="post">
        </form>
        <?php }else{?>
        <h5><i class="icon-user"></i>&nbsp; Login to  Comment</h5>

        <?php } ?>
        
        <div class="row-fluid">
            <div class="row padding20">
                <h3 class="well well-small">#<?=!empty($blog['swag_name']) ? $blog['swag_name'] : $blog['name']?> Has Organized some events</h3>
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
        
        <div class="span3">
        <div class="well place-center">
        <a href="<?=base_url('business/biz_listing')?>">
        <img src="<?=base_url('assets/imgs/listing.jpg')?>" style="width: 100%">
        <small class="fg-black">See Businesses around</small>
        </a>
        </div>
        
        <div class="well pull-center">
        <!-- <small>Blog Statistics</small> -->
        <!-- <h4><h1><?php // $blog['views']?></h1> Visitors</h4> -->
        <h6><?= date('F jS, Y h:i:s A',time())?></h6>
        <h6><?php //$_SERVER['REMOTE_ADDR']?></h6>
        </div>
        <?php //if(isset($all){?>
        <div class="well well-small" style="background-color: grey; color: white;">
        <h5>+ Other Blogs
        <div class="pull-right">
        <i class="icon-bullhorn"></i>
        </div></h5>
        </div>
        
        <?php 
         foreach($all as $key => $others){
            if($blog['title'] != $others['title']){
            ?>

        <h4><a href="<?=base_url('isee/presenter/'.strtolower($others['presenter_id']))?>"><i class="icon-filter"></i>&nbsp;<?=$others['title']?></a></h4>

        <?php } } ?>
        
        </div>        

        </div>
        </div>
        <?php

    
    ?>