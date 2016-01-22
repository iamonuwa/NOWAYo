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
								
					</ul>
						 <a href="<?php echo base_url('cam-tales');?>" title="View All" class="btn btn-medium btn-red">View All</a>

												
					</div>
				</div>
				</div>
					<div class="widget">		
				
					<h4 class="block-heading"><span>Recent Posts</span></h4>		
					
					<ul>
							<?php foreach ($list as $key => $value) {?>
								
						<li><a href="<?=base_url('news/views/'.$value['news_id'].'/' . $value['news_title_url']);?>"><?php echo $value['news_title'];?></a><span class="post-date"><?php echo date('F jS, Y',$value['news_added']);?></span></li>
							<?php }?>
					</ul>
					
				</div>
				</div>