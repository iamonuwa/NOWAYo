
	<div class="post-img center full-size" id="parallax"><a href = "<?= base_url('uploads/').'/'.$news[0]['link'];?>" rel = "lightbox"><img src="<?= base_url('uploads/').'/'.$news[0]['link'];?>"></a></div>

		
			<div class="divider-block"></div>

			<div id="content" class="fullwidth">
			
				<div class="post">
					
					<div class="post-entry">
					
						<h1><?php echo $news[0]['news_title'];?></h1>
						
						<p><?php echo $news[0]['news_content'];?></p>	

						<p></p>				
													
					</div><!-- END POST-ENTRY -->				
					
				</div><!-- END POST -->								
							
			</div><!-- END CONTENT -->	
		
		</div><!-- END CONTAINER -->

		</div>		
		<div class="comments-block">
			
			<div class="container">

				<div id="comments">

					<div class="post-comments">
						
						<h4 class="block-heading"><span>Comments</span></h4>
						
						<div class="comments">
						
							<?php //echo $this->disqus->get_html();?>
						</div><!-- END COMMENTS -->		

						
					</div> <!-- END POST-COMMENTS -->
		
				</div><!-- END COMMENTS -->						
										
			</div><!-- END CONTAINER -->
		

