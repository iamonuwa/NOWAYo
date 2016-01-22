<?php
//var_dump($state);
?>

<div id="wrapper">
    <div class="container">
        <div class='block-divider'></div>
        <div class='content' id="content">
            <h1><?= $this->title ?></h1>
            <br/>
            <br/>

            <!-- <div class='lightbox' id='lightbox' style="display:none; top:; left:0px;">
            <div class="lb-outerContainer" style="width:441px; height:297px;">
            <div class="lb-container">
            <img class="lb-image" src="<?php // base_url('assets/imgs/ad.jpg') ?>" style='display:block; width:433px; height:289px;'>
            <div class="lb-nav" style="display:block"></div>
            <div class="lb-loader" style="display:none;">
            </div>
            </div>
            </div>
            </div> -->

         
        </div>
        <div class="featured animate fadeInDown animated" data-animate="fadeInDown">					
				
				<div class="left featured_hover_effect">			
								
					<a><img src="<?= base_url('assets/imgs/listing.jpg') ?>" height="330" width="500"></a>
                    <div class="featured-text" style="bottom :0px">
                        <a>
                            <h1>NOWAYO ADS</h1>
                        </a>
                    </div>			
						
				</div><!-- END LEFT -->							
								
				<div class="right">				
								
										
						<div class="right featured_hover_effect">					
													
							<a href="#">						
							
								<img src="<?=base_url('assets/imgs/blog_ad.jpg')?>" alt="" style="width: 95%"/>
							
							</a>							
													
							<div class="featured-text">								
								
								<a href="#">									
									Click Here
								</a>									
							
							</div><!-- END FEATURED-TEXT -->						
												
						</div><!-- END RIGHT-VERT -->		
						
					</div><!-- END RIGHT-HORZ -->					
					
				</div><!-- END RIGHT -->								
									
			</div>



        <div class='wrapper' id="wrapper">
            <div class='container'>
                <div class="divider-block"></div>
                <div class="" id='content'>

                    <h1><?= $this->title ?></h1>
                    <!-- <img src="<?php //base_url('assets/imgs/search.png') ?>" style="width: 20%; padding:20px;"> -->
                    <hr/>
                    <h4>Select state to view the Businesses listed under it</h4>
                    <br/>



                    <div class="row">
                        <span class="wpcf7-form-control-wrap form-group your-state">
                            <form action="<?= base_url('business/listing/state') ?>" method="GET">
                                <select style="padding:20px; width: 80%" name="state" required class="wpcf7-form-control wpcf7-select wpcf7-state wpcf7-validate-as-state">
                                    <h2><option style="font-size: 15px;" value="NULL">-Select State-</option></h2>
                                    <?php foreach ($state as $key => $value) { ?>
                                        <option style="font-size: 20px;" value="<?php echo $value['state_name'] ?>"> <?php echo $value['state_name'] ?></option>

                                    <?php } ?>
                                </select>

                        </span>
                        <p>
                            
                            <!--<input type="submit" name="" style="background-color:red; width: 80%; padding:20px; color: white; font-size: 130%; font-family: impact" class="wpcf7-form-control wpcf7-submit wpcf7-validate-as-required" value="Search ">-->
                            <button class="btn btn-large">Search </button>


                        </p>
                        </form>

                    </div>
                </div>

                <div id='sidebar' class="sidebar">
                    <div class="widget">
                        <h4 class="block-heading" style=""><span><i class="fa fa-camera"></i>&nbsp;Popular Bloggers</span></h4>
                        <ul>

                            <?php
                            for ($index = 0; $index < count($all); $index++) {
// var_dump($business[$index]['name']);
                                ?>

                                <li><a href="<?= base_url('isee/presenter/' . $all[$index]['presenter_id']) ?>">
                                        <strong><?= $all[$index]['field'] ?><br/></strong>
                                        <h3 class="" style="color: ;"><?= $all[$index]['title'] ?><br/>
                                            <span><small><?= $all[$index]['intro'] ?></small></span></h3></a>
                                </li>
                                <hr />
<?php }
?>
                            <a href="<?= base_url('isee/isee') ?>"><h5 class="btn-red">View all</h5></a>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>