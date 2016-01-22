<div id="wrapper">	
<!-- 	
		<div class="container">		
			
			<div class="featured">					
				
				<div class="flexslider post-img">				
							
					<div class="flex-viewport">
					
						<ul class="slides"> -->
						<div style="overflow: hidden; position: relative;" class="flex-viewport">
<ul style="width: 1200%; transition-duration: 0s; transform: translate3d(-1132px, 0px, 0px);" class="slides">

						


						<?php foreach ($news as $data) {?>
<li style="width: 1132px; float: left; display: block;" aria-hidden="true" class="clone" data-thumb="<?= base_url('assets/imags/34.jpg')?>">							
						
						<a href="<?= base_url('assets/imags/34.jpg')?>" title="Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass" rel="lightbox">								
									
									<img draggable="false" alt="Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass" src="<?= base_url('assets/imags/34.jpg')?>">									
								
								</a>								
																	
								<span class="caption">Kenneth Cole Challenges You to Do Good Deeds — and Prove it via Google Glass</span>								
																
							</li>
						
							
							

							<?php } ?>	
										
										
												
						<!-- </ul>
						
					</div> -->
					
				<!-- </div> -->
				<!-- END FLEXSLIDER								
									
			</div>
			<!-- END FEATURED -->	
			<!-- <div class="" id="content"> -->
			<!-- </div> --> 
			
							
			<div id="content">			
			<?php foreach($opinion as $key => $opi){

if($opi['reviewed'] != NULL){
						?>
						<div class="post list">				
					
					<div class="post-entry">				
										
						
						<h4><a href="<?= base_url('opinion/view/' . $opi['id'])?>" title="<?= $opi['title']?>"><?php echo strtoupper($opi['title'])?></a></h4>				
						
						
						<p>																
															
						</span><!-- END META -->								
												
					</div><!-- END POST-ENTRY -->						
					
				</div><!-- END POST LIST -->	
				

						<?php } } ?>
					<?php foreach ($news as $data) {
						?>

				<div class="post list">				
					
					<div class="post-entry">				
										
						
						<h4><a href="<?= base_url('news/views/'.$data['news_id'].'/' . $data['news_title_url']);?>" title="<?= $data['news_title'];?>"><?php echo $data['news_title'];?></a></h4>					
						
						<p><?php // echo strtok($data['news_content'], '\n');?></p>	
					<!--	<span class="meta">								

							<span class="share"><a href="#"><i class="fa fa-share"></i> 1</a></span>
								
							<span class="comment"><a href="#"><i class="fa fa-comment-o"></i> 2</a></span>
							
							<span class="eye"><a href="#"><i class="fa fa-eye"></i> 778</a></span>																	
															
						</span><!-- END META -->								
												
					</div><!-- END POST-ENTRY -->						
					
				</div><!-- END POST LIST -->	
				
				<?php } ?>
			<a href="<?=base_url('opinion')?>" style="width:70px; length: 90px; color:red; background-color: black; padding: 6%;"><h3 class="">Opinion Poll</h3></a>

				
			
				
			</div><!-- END CONTENT --><div id="sidebar">
			
			<div class="widget">
												
				<div class="widget">
					<a href='<?=base_url('business/biz_listing/state')?>'><h4 class="block-heading"><span>See Businesses Around</span></h4></a>
				<hr/>
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
					
					<?php foreach($opinion as $k => $v) {
						if($k['reviewed'] != NULL){?>
						<li><a href="<?= base_url('opinion/view/' . $v['id'])?>" title="<?= $v['title']?>"><?php echo $v['title']?></a>
						<span class="post-date"><?php echo date('F jS, Y',$v['date_created']);?></span>

						</li>					

					<?php } } ?>
					</ul>
					
				</div>
				</div>

			
			
			</div>
		</div>
<div class="pagination">
		<?php echo $this->pagination->create_links();?>
</div>