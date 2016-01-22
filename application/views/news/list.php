<?php 
//print_r($slogan);

				// var_dump($getBystate);
				
				// if(count($getBystate) > ){


				$stateSerach = $this->uri->segment(3);					
				// echo $stateSerach;
					$newsImage['list'] = $this->state_model->getByState($stateSerach);
					// var_dump($newsImage['list']);
//!empty(base_url('uploads/').'/'.$view[$count]['image_id']) ? base_url('uploads/').'/'.$view[$count]['image_id']: $view[$count]['name'] 

?>
<div id="wrapper">	
	
		<div class="container">	
		<div class="container btn-red" style=" a:hover:red">
<marquee behavior="alternate" behavior="alternate" scrollamount="30"><a style="hover: red" href='<?=base_url('business/listing/state')?>'><h3>Searching for something??? <small>Click here to view Businesses Around</small></h3></a></marquee>
<!-- <h4>Display text</h4> -->
</div>
	
				
			<div class="divider-block">&nbsp;</div>
			
			<div id="content">

				<div class="category-heading fullpost">
			<?php //print_r($newsImage['list'][0]['state_logo']) ?>


					<h1><img style="width: 25%; padding-right:  20px"   src="<?=base_url('assets/camtales/logos/'.$newsImage['list'][0]['state_logo'])?>"><br/><?php echo "News From ".$this->title;?></h1>
					<div class="row pull-right">
					<h5><a href="<?=base_url('business/listing/state/'.substr($this->title, 10))?>" style="color: white; background-color: black; padding:10px;">View Businesses in <?php echo substr($this->title, 10);?> State</a></h5>
					</div>
                                        <hr/>
                                        <i style="color: gray;"><?= $newsImage['list'][0]['state_slogan'] ?></i>
					<p><?php echo ''; ?></p>
				</div>
					
				<?php 
				// var_dump($getBystate);
				
				if(count($getBystate) > 0){


				foreach ($getBystate as $item) {
					

					
				
					?>

				<div class="post list">	

				<div class="post-img">				
											
						<a class="item_overlay" href="#"><img width="268" height="175" src="<?= base_url('uploads/').'/'. $item['link'];?>" alt="18"></a>
											
				</div>
								
					
					<div class="post-entry">				
						
						<h4><a href="<?=base_url('news/views/'.$item['news_id'].'/' . $item['news_title_url']);?>"> <?php echo $item['news_title']; ?> </a></h4>					
													
					</div>					
					
				</div>	

				<?php }?>
					<div class="pagination">
				<!--
					<span class="pages">1 &nbsp;of &nbsp;3</span>
				
					<span class='page-numbers current'>1</span>
					
					<a class='page-numbers' href='#'>2</a>
					
					<a class='page-numbers' href='#'>3</a>
					
					<a class="next page-numbers" href="#">&gt;</a> -->

					<?= $pagination->create_links(); ?>
				
				</div>

			<?php }
				else {
					foreach ($states as $key => $value) {
							}

							echo '<div class="alert alert-red">No News for now...</div>';
						
			}
				?>
							
			</div>

			
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
								
						</form>
						
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
		
		</div>
	</div>