<?php
$erro = "";
/*
  <div class="editors-picks divblock">

  <h3 class="block-heading"><span>Our Presenters</span></h3>
  <?php if (count($presenter) > 0) {?>
  <section id="dg-container" class="dg-container">
  <div class="dg-wrapper">

  <?php

  foreach ($presenter as $row) { ?>
  <a href="#"><img width="410" height="290" src="<?php  $img_link = base_url('uploads/').'/'. $row['link']; echo $img_link;?>" alt="image01">
  </a>

  <?php } 	?>

  </div>

  </section>
  <?php }
  else{
  ?>
  <div class="alert alert-red">Our Presenters are Currently Busy. Uploads Soon...</div>
  <?php
  }?>


  </div>

  <div class="editors-picks divblock">

  <h3 class="block-heading"><span>Members Uploads</span></h3>


  <?php
  if(count($uploads) > 0){

  foreach ($uploads as $row) {?>


  <div class="grid grid-8">

  <div class="image"><a class="item_overlay" href="<?=base_url('cam/views/'.$row['user_id']);?>">
  <img width="150" height="150" src="<?php $img_link = base_url('uploads/').'/'. $row['link']; echo $img_link;?>"  alt="31"></a></div>
  <p align="center"><?php echo $row['fullname'];?></p>
  </div><!-- END ENTRY -->


  <?php }
  }
  else{?>
  <div class="alert alert-red">You Have No Images In Your Album</div>
  <?php } ?>

  </div> */
?>
<div class="hero-unit" style="background-image: url(<?= base_url('assets/camtales/img/image_back.jpg') ?>);">
    <h1>CAM TALES</h1>
    <p>Get your daily affairs uploaded and win a price for the most natural</p>
    <p>    
        <a class="btn btn-primary btn-large">
            Learn more
        </a> </p>
</div>
<div class="fluid">
    <div class="btn-group">
        <a href="<?= base_url('cam-tales/'); ?>"><button class="btn <?php //empty($request) || $request === 'activity_log' ? 'active' : ''                        ?>"><i class="icon-cog"></i>&nbsp;Recent Activity</button></a>
        <?php if ($this->aauth->is_loggedin()) { ?><a href="<?= base_url('cam-tales/uploads'); ?>"><button class="btn <?php //$request === 'myUploads' ? 'active' : ''        ?>"><i class="icon-picture"></i>&nbsp;My Uploads</button></a><?php } ?>
        <a href="<?php echo base_url('cam-tales/create/'); ?>"><button class="btn btn-primary"><i class="icon-plus"></i>&nbsp;Upload Images</button>&nbsp;&nbsp;&nbsp;</a>

    </div>

</div>
<div class="container-fluid">
    <div class="row-fluid">
        <?php if (empty($this->uri->segment(2))) { ?>
       
            <div class="span9">

                <h2>Activity Logs</h2>
                <hr/>
                <div class="container-fluid">
                    <?php if (count($uploads) > 0) { ?>

                        <div class="row-fluid">

                            <?php
                            if (isset($uploads)) {

                                foreach ($uploads as $row) {
                                    ?>
                                    <div class="row">
                                        <hr/>

                                        <small><i class="icon-tint"></i>&nbsp;Updated: Just now</small>
                                        <hr/>
                                        <img style="height: 400px; width: 700px;" src="<?= !empty(base_url(('uploads/') . '/' . $row['link'])) ? base_url('uploads/') . '/' . $row['link'] : '' ?>" alt="<?= $this->aauth->get_user($row['user_id'])->fullname . '\'s image' ?>"class="img-rounded"> 
                                    </div>
                                    <div class="row padding20">
                                        <h5><strong><?= $this->aauth->get_user($row['user_id'])->fullname; ?> <small>posted an image</small></strong></h5>                                        
                                        <i class="icon-comment"></i><small>&nbsp;50 Comments</small>
                                        <small style="color:red;">1.2k Likes</small>
                                        



                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        <?php } ?>
                    </div>
                </div>
            </div>

            <?php
            
//                    var_dump($this->uri->segment(1));
        }elseif ($this->uri->segment(2) === "uploads") {
			
            if ($this->aauth->is_loggedin()) {
//                var_dump($erro);
//                ECHO "here ";
                ?>
                <div class="span9">



                    <h2><?= $this->aauth->get_user()->fullname ?><small>'s&nbsp;Pictures</small></h2>

                    <hr/>
                        <div class="container-fluid">
                            <div class="row-fluid">
                    <div class="row-fluid">



                        <div class="span12">

                            <div class="thumbnails">
                                <?php
                                $user_id = $this->aauth->get_user()->id;
                                $data[] = $this->upload_model->fetchByUser($user_id);
//                                print_r($data[0]);
//                                var_dump($data);
                                if (!empty($data[0])) {

                                    for ($index = 0; $index < count($data[0]); $index++) {
                                        ?>

                                        <div class="span4 padding20 fg-gray" style="height: 250px; width: 200px;">
                                            <a href="#myModal" role="button"  class="thumbnail" data-toggle="modal">
                                                <img data-src="holder.js/300x200" src="<?= base_url('uploads/' . $data[0][$index]['link']); ?>" alt="">
                                                <p class="" style="color:black;"><?= $data[0][$index]['description'] ?></p>
                                            </a>                        
                                        </div>
                                        <?php
                                    }
                                } else {
                                    $erro = "No Image in your album";
                                }
                                ?>
                            </div>
                            <?php if (!empty($erro)) { ?>
                                <div class="span12 place_center row">
                                    <p><i class="icon-picture"></i></p>
                                    <h5><?= $erro ?></h5>
                                </div>
                            <?php } ?>
                        </div>

                    </div>

                </div>
				</div>
				
				</div>
                <!--                <div class="row-fluid">
                
                
                
                
                                </div>
                                <hr/>
                                <div class="row-fluid padding20">
                                </div>-->


            <?php } else { ?>
                <div class="span9">
                    <div class="hero-unit">
                        <p style="color:black;"><i class="icon-wrench"></i>&nbsp;PRIVATE PAGE</p>
                        <hr/>
                        <h3>You need to login to view this page</h3>
                        <p><button class="btn btn-primary btn-large">Login</button></p>
                    </div>

                </div>
				
                <?php
            }
        }
        ?>

        <div class="span3" style="">
            
            <div class="span12">
                <hr/>
                <h3 class="well well-small">Featured Users</h3>
                
                <div class="span padding20" style="padding: 0px;">
                    <div class="thumbnails">
                        <?php
                        $users[] = $this->userutitlities->getUserDetails(NULL, 3);

                        for ($index = 0; $index < count($users[0]); $index++) {
                            ?>

                            <div class="span2" style="width: 30%">
                                <a style="color:black;" title="<?= $users[0][$index]['fullname'] ?>" href="<?= base_url('cam/get_single_user/' . $users[0][$index]['id']) ?>">

                                    <img class="thumbnail" data-src="holder.js/300x200" src="<?=
                        !empty($users[0][$index]['profile_picture']) ? base_url('uploads/' . $users[0][$index]['profile_picture']) :
                                base_url('assets/camtales/img/picture5.png')
                            ?>" style=" width: 80%;">
                                    <p></p>
                                </a>
                            </div>

                        <?php } ?>
                        

                    </div>

                </div>
                <div class="row padding20">
                                    <a href=" <?= base_url('cam-tales/account/display_photos') ?>"><button class="btn btn-primary">view all Users</button></a>
                        </div>
                <hr/>
            </div>
            <h3 style="color: whitesmoke;">Hottest Events</h3>
           
            <a href="#"><li>A visit to National Musuem</li></a>
            <!--<li class="divider"></li>-->
            <a href="#"><li>A visit to National Musuem</li></a>
            <a href="#"><li>A visit to National Musuem</li></a>
            <a href="#"><li>A visit to National Musuem</li></a>

        </div>
    </div>
</div>