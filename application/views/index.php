<div class="preloader">

    <div class="status">&nbsp;</div>

</div>
<div id="wrapper">	

    <div class="container">		

        <div class="featured">					

            <div class="flexslider post-img">				

                <div class="flex-viewport">

                    <ul class="slides">



                        <?php foreach ($news as $data) { ?>


                            <li>	

                                <img width="400" height="160" src="<?php echo base_url('uploads') . '/' . $data['link']; ?>" alt="Image">					

                                <div class="featured-inner">

                                    <div class="featured-text">

                                        <div class="post-heading">
                                            <h1><?php echo $data['news_title']; ?></h1>

                                        </div>

                                        <div class="meta">

                                            <span class="date"><?php echo date('F jS, Y h:i:s A', $data['news_added']); ?></span>	

                                        </div>	
                                        <a class="btn btn-medium btn-red col-xs-2" href="<?= base_url('news/views/' . $data['news_id'] . '/' . $data['news_title_url']); ?>" title="<?= $data['news_title']; ?>">READ MORE</a>

                                    </div>

                                </div>

                            </li>	

                        <?php } ?>	



                    </ul>

                </div>

            </div>
            <!-- END FLEXSLIDER -->								

        </div>
        <!-- END FEATURED -->

        <!-- BEGIN TEST RUN -->




        <!-- END TEST RUN -->











        <div class="" id="content">
        </div>


        <div id="content">			

            <div class="divider-block">&nbsp;</div>

            <div class='left' id="content">




                <?php foreach ($news as $data) {
                    ?>

                    <div class="post list">	                                   

                        <div class="post-img">				

                            <a class="item_overlay" href="#"><img width="268" height="175" src="<?= base_url('uploads/') . '/' . $data['link']; ?>" alt="18"></a>

                        </div>							

                        <div class="post-entry">				


                            <h4><a href="<?= base_url('news/views/' . $data['news_id'] . '/' . $data['news_title_url']); ?>" title="<?= $data['news_title']; ?>"><?php echo $data['news_title']; ?></a></h4>					

                            <p><?php echo substr($data['news_content'], 0, 300) . '...'; ?></p>	
                            <span class="meta">								

                                <span class="share"><a href="#"><i class="fa fa-share"></i> 1</a></span>

                                <span class="comment"><a href="#"><i class="fa fa-comment-o"></i> 2</a></span>

                                <span class="eye"><a href="#"><i class="fa fa-eye"></i> 778</a></span>																	

                            </span>
                            <!-- END META -->								

                        </div><!-- END POST-ENTRY -->						

                    </div><!-- END POST LIST -->	

                <?php } ?>
                <?php
                foreach ($opinion as $key => $opi) {

                    if ($opi['reviewed'] != NULL) {

                        $poster['name'] = $this->userutitlities->getUserDetails($opi['user_id']);
                        ?>
                        <div class="post list">				

                            <div class="post-entry">				

                                <h6><i class="fa fa-share"></i>&nbsp;<?= $poster['name']['fullname'] ?><span style="color: red;"> Shared;</span> </h6>
                                <h4><a href="<?= base_url('opinion/view/' . $opi['id']) ?>" title="<?= $opi['title'] ?>"><?php echo strtoupper($opi['title']) ?></a>				
                                    <p style="font-family: segoe UI;"><?= !empty($opi['content']) ? strip_tags(substr($opi['content'], 0, 300)) . '...' : ''; ?></p></h4>


                                <p>																

                                    </span><!-- END META -->								

                            </div><!-- END POST-ENTRY -->						

                        </div><!-- END POST LIST -->	


                    <?php
                    }
                }
                ?>

            </div>
            <div class="post list">
                <div class="post-image">
                    <img src="<?=base_url('assets/imgs/opinion.jpg')?>" alt="Opinion Poll"/>
                </div>
                
            </div>
            <a href="<?= base_url('opinion') ?>" style=""><button class="btn btn-medium "><i class="fa fa-dropbox"></i>&nbsp;Opinion Poll - click here</button></a>




        </div><!-- END CONTENT --><div id="sidebar">

            <div class="widget">

                <div class="widget">
                    <a href='<?= base_url('business/listing/state') ?>'><h4 class="block-heading"><span>See Businesses Around</span></h4></a>
                    <hr/>
                    <h4 class="block-heading"><span></span></h4>

                    <!--<div class="twitter_feed">-->
                        <img src="<?=base_url('assets/imgs/blog_ad.jpg')?>" alt="" style="width:100%"/>

                        <a href="<?php echo base_url('isee'); ?>" title="View All" class="btn btn-medium btn-red"><i class="fa fa-camera"></i>&nbsp;View All</a>


                    <!--</div>-->
                </div>
            </div>
            <div class="widget">		

                <h4 class="block-heading"><span>Recent Posts</span></h4>		

                <ul>
<?php foreach ($list as $key => $value) { ?>

                        <li><a href="<?= base_url('news/views/' . $value['news_id'] . '/' . $value['news_title_url']); ?>"><?php echo $value['news_title']; ?></a><span class="post-date"><?php echo date('F jS, Y', $value['news_added']); ?></span></li>
                    <?php } ?>

                    <?php
                    foreach ($opinion as $k => $v) {
                        if ($k['reviewed'] != NULL) {
                            ?>
                            <li><a href="<?= base_url('opinion/view/' . $v['id']) ?>" title="<?= $v['title'] ?>"><?php echo $v['title'] ?></a>
                                <span class="post-date"><?php echo date('F jS, Y', $v['date_created']); ?></span>

                            </li>					

                        <?php
                        }
                    }
                    ?>
                </ul>

            </div>
        </div>



    </div>
</div>
<div class="pagination">
<?php echo $this->pagination->create_links(); ?>
</div>