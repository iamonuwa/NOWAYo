<div id="wrapper">	
	
		<div class="container">		
			
			<div class="featured">					
				
				<div class="flexslider post-img">				
							
					<div class="flex-viewport">
					
						<ul class="slides">

						<?php foreach ($news as $entry {?>
							
							<li>	
								
								<img width="400" height="80" src="<?php echo base_url('uploads/').'/'. $entry['link'];?>" alt="Image">					
								
								<div class="featured-block">															
									
									<div class="featured-inner">
										
										<div class="post-heading">
											<h1><?php echo $entry['news_title'];?></h1>
										
										</div>
										
										<div class="meta">
											
											<span class="date"><?php echo date('M jS, Y g:h:i a',strtotime($entry['news_added']));?></span>	
										
										</div>	
										<a class="btn btn-medium btn-red" href="<?= base_url('news/views/'.$entry['news_id'].'/' . $entry['news_title_url']);?>" title="<?= $entry['news_title'];?>">READ MORE</a>
									
									</div>
								
								</div>
							
							</li>	

							<?php } ?>					
										
												
						</ul>
						
					</div>
					
				</div><!-- END FLEXSLIDER -->								
									
			</div><!-- END FEATURED -->	
			
							
			<div id="content">			
					<?php foreach ($news as $entry) {?>
				<div class="post list">				
					
					<div class="post-entry">				
										
						
						<h4><a href="<?= base_url('news/views/'.$entry['news_id'].'/' . $entry['news_title_url']);?>" title="<?= $entry['news_title'];?>"><?php echo $entry['news_title'];?></a></h4>					
						
						<p><?php echo strtok($entry['news_content'], '\n');?></p>	
					<!--	<span class="meta">								

							<span class="share"><a href="#"><i class="fa fa-share"></i> 1</a></span>
								
							<span class="comment"><a href="#"><i class="fa fa-comment-o"></i> 2</a></span>
							
							<span class="eye"><a href="#"><i class="fa fa-eye"></i> 778</a></span>																	
															
						</span><!-- END META -->								
												
					</div><!-- END POST-ENTRY -->						
					
				</div><!-- END POST LIST -->	
				
				<?php } ?>
				
			
				
			</div><!-- END CONTENT -->

			
			<div id="sidebar">
			
			<div class="widget">
												
				<div class="widget">
				
					<h4 class="block-heading"><span>Photostream</span></h4>
					
					<div class="twitter_feed">

					<ul class="fetched_tweets dark">
									<?php foreach ($limit as $images) { ?>
								<li class="tweets_avatar">
											
									<img src="<?php echo base_url('uploads/').'/'.$images['link'];?>" height="50" width="50" alt="Image-<?php echo base_url('uploads/').'/'.$images['upload_id'];?>"/>		        	
								</li>
									 <?php }?> 
								
					</ul><!-- END FETCHED TWEETS -->
					
				
						 

						 <a href="<?php echo base_url('cam');?>" title="View All" class="btn btn-medium btn-red">View All</a>

												
					</div><!-- END FLICKR -->
					
				</div><!-- END FLICKR WIDGET -->
				
				</div>
					
					<div class="widget">
					
						<h4 class="block-heading"><span>Tags</span></h4>
						
						<div class="tagcloud">
						
							<a href="#" class="tag-link-7" title="1 topic">99u talk</a>
							
							<a href="#" class="tag-link-8" title="1 topic">amazon</a>
							
							<a href="#" class="tag-link-9" title="1 topic">audio</a>
							
							<a href="#" class="tag-link-10" title="1 topic">baby monitor</a>
							
							<a href="#" class="tag-link-11" title="2 topics">barcelona</a>
							
							<a href="#" class="tag-link-12" title="1 topic">blueberry</a>
							
							<a href="#" class="tag-link-13" title="6 topics">Business</a>
							
							<a href="#" class="tag-link-14" title="1 topic">busy</a>
							
							<a href="#" class="tag-link-41" title="4 topics">Ipsum</a>
							
							<a href="#" class="tag-link-45" title="4 topics">Loren</a>
							
							<a href="#" class="tag-link-49" title="2 topics">microsoft</a>
							
							<a href="#" class="tag-link-51" title="3 topics">music</a>
							
							<a href="#" class="tag-link-63" title="2 topics">robot</a>
							
							<a href="#" class="tag-link-68" title="2 topics">travel</a>
						
						</div><!-- END TAGCLOUD-->
					
					</div><!-- END TAGS WIDGET-->
	
					
				
				</div><!-- END SIDEBAR -->					
		
			</div><!-- END CONTAINER -->
			
		
		</div><!-- END WRAPPER -->
		</div>