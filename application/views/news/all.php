<div class="wrapper">
		<div class="container btn-red" style="a:hover:red">
<marquee behavior="alternate" behavior="alternate" scrollamount="30"><a hover='red' href='<?=base_url('business/biz_listing')?>'><h3>Searching for something??? <small>Click here to view Businesses Around</small></h3></a></marquee>
<!-- <h4>Display text</h4> -->
</div>
<div class="post_nav" style="display: block;">
<div class="hnav hnaf-left">

</div>
</div>
		<div class="container">		
				
			<div class="divider-block">&nbsp;</div>
			
			<div class='left' id="content">

				<div class="category-heading fullpost">
			
					<h1>News Making Rounds</h1>
					
				</div><!-- END CATEGORY HEADING -->

				
				<?php foreach ($list as $item) {?>

				<div class="post list">	

				<div class="post-img">				
											
						<a class="item_overlay" href="#"><img width="268" height="175" src="<?= base_url('uploads/').'/'. $item['link'];?>" alt="18"></a>
											
				</div>
								
					
					<div class="post-entry">				
						
						<h4><a href="<?=base_url('news/views/'.$item['news_id'].'/' . $item['news_title_url']);?>"> <?php echo $item['news_title']; ?> </a></h4>					
						
						<p><?php echo date('F jS, Y',$item['news_added']);?></p>						
						
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
				<a href='<?=base_url('business/biz_listing')?>'><h4 class="block-heading" style="color:white;"><span>
				Business around you</span></h4></a>
				<hr/>
				
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
				
					<h4 class="block-heading"><span>Recent Posts</span></h4>		
					
					<ul>
							<?php foreach ($list as $key => $value) {?>
								
						<li><a href="<?=base_url('news/views/'.$value['news_id'].'/' . $value['news_title_url']);?>"><?php echo $value['news_title'];?></a><span class="post-date"><?php echo date('F jS, Y',$value['news_added']);?></span></li>
							<?php }?>
					</ul>
					
				</div><!-- END LATEST POSTS WIDGET -->
				
			</div><!-- END SIDEBAR -->					
		
		</div><!-- END CONTAINER -->				
			
	</div><!-- END WRAPPER -->
