<div class="wrapper">
		<div class="container">		
							
							
				<div align = "center" class="flex-viewport">
								
								<img width="400" height="213" src="<?php echo base_url('assets/path/images/Isee-Isay.jpg');?>" alt="Image">
				</div>		
			<div class="divider-block">&nbsp;</div>
			
			<div id="content">

				<div class="category-heading fullpost">
			
					<h1>I-see-I-say Posts</h1>
					
				</div><!-- END CATEGORY HEADING -->

				
				<?php foreach ($list as $item) {?>

				<div class="post list">	

				<div class="post-img">				
											
						<a class="item_overlay" href="#"><img width="268" height="175" src="<?= base_url('uploads/').'/'. $item['link'];?>" alt="18"></a>
											
				</div>
								
					
					<div class="post-entry">				
						
						<h4><a href="<?=base_url('blog/views/'.$item['news_id'].'/' . $item['news_title_url']);?>"> <?php echo $item['news_title']; ?> </a></h4>					
						
						<p>Posted By <?php echo $this->aauth->get_user($item['news_user_fk'])->fullname;?></p>						
						
						<p>On <span class="date"><?php echo date('F jS, Y h:i:s A',$item['news_added']);?></span>						
						
						<!-- <span class="meta">								

							<span class="share"><a href="#"><i class="fa fa-share"></i> 1</a></span>
								
							<span class="comment"><a href="#"><i class="fa fa-comment-o"></i> 2</a></span>
							
							<span class="eye"><a href="#"><i class="fa fa-eye"></i> 778</a></span>																	
															
						</span><!-- END META -->								
												
					</div><!-- END POST-ENTRY -->						
					
				</div><!-- END POST LIST -->	

				<?php }?>
				

				<div class="pagination">
				
					<?php //$this->pagination->create_links(); ?>
				
				</div><!-- END PAGINATION -->	
							
			</div><!-- END CONTENT -->

			
			<div id="sidebar">
		
				<div class="widget">
				
					<h4 class="block-heading"><span>Subscribe newsletter</span></h4>	
						
					<div class="newsletter">
					
						<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=dopamine/NgZL', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
						
							<p>Subsribe to our newsletter to receiver daily updates.</p>
							
							<p><input type="text" placeholder="Enter Email Address" name="email"></p>
							
							<input type="hidden" name="uri" value="dopamine/NgZL">
							
							<input type="hidden" name="loc" value="en_US">
							
							<input type="submit" class="btn btn-medium btn-red" value="Subscribe">
								
						</form><!-- END FORM -->
						
					</div><!-- END NEWSLETTER -->
					
				</div><!-- END NEWSLETTER WIDGET -->		
			
				
				<div class="widget">
				
					<h4 class="block-heading"><span>Find us on Facebook</span></h4>			
					
					<div class="facebook" style="width:300px; margin: 20px auto; ">
				
						<iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/envato&amp;width=300&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=350&amp;show_border=false" style="border:none; overflow:hidden; width:300px; height:350px;"></iframe>
					
					</div><!-- END FACEBOOK -->
					
				</div><!-- END FACEBOOK WIDGET -->	
				
			</div><!-- END SIDEBAR -->				
		
		</div><!-- END CONTAINER -->				
			
	</div><!-- END WRAPPER -->
