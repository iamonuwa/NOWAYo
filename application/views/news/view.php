<div class='center' id='wrapper'>
<div class="container">
		<div class="container btn-red" style="background-color: ;">
<marquee behavior="alternate" behavior="alternate" scrollamount="30"><a style="hover: red" href='<?=base_url('business/listing/state')?>'><h3>Searching for something??? <small>Click here to view Businesses Around</small></h3></a></marquee>
<!-- <h4>Display text</h4> -->
</div>

<div class="divider-block"></div>
<div class="" id='content'>

<div class="row">
<h6> News From <?=$news[0]['category']?> State >> <?=$news[0]['news_title']?></h6>
<hr/>
<br/>
</div>
	<div class="post-img center" id="parallax">
	<img style='width:60%' src="<?= base_url('uploads/').'/'.$news[0]['link'];?>">
	</div>

		
			<div class="divider-block"></div>

			<div id="content" class="fullwidth">
			
				<div class="post">
					
					<div class="post-entry">
					
						<h1><?php echo $news[0]['news_title'];?></h1>
						<p><?php echo 'Posted By: <b>' . $this->aauth->get_user($news[0]['news_user_fk'])->fullname. '</b><i> On: '. date('F jS, Y h:i:s A',$news[0]['news_added']).'</i>';?></p>	
						<hr/>
						<br/>

						<p><?php echo $news[0]['news_content'];?></p>	

						<p></p>				
													
					</div><!-- END POST-ENTRY -->				
					
				</div><!-- END POST -->								
							
			</div><!-- END CONTENT -->	
	
	<div class="comments-block">
			
			<div class="container">

				<div id="comments">
				<?php  
                if($this->session->userdata('id'))//if user is loged in, display comment box
                {?>
									</ul>
  
						<div id="respond" class="comment-respond">
						
							<h3 id="reply-title" class="comment-reply-title">Join the Conversation <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
														
							<form action="<?=  base_url('news/add_comment/'.$news[0]['news_id'].'/'.$news[0]['news_title_url']);?>" method="post" id="commentform" class="comment-form">
																																									
								<p class="comment-form-comment">
								<textarea id="wysiwyg" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p>												
								
								<p class="form-submit">
								
									<input name="submit" type="submit" id="submit" class="submit" value="Send">
								
								</p>
								
								<input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="ad98983357">
								
							</form>

							<?php 
               
                } else {//if no user is loged in, then show the loged in button
                ?>
                <div class="alert alert-red">Please Login To Comment</div>
        <?php    } ?>

					<div class="post-comments">
						
						<h4 class="block-heading"><span>Comments</span></h4>
						
						<div id="comments" class="comments">
						
							<ul class="comments_ul">	
								<?php 
                    foreach ($comments as $row)
                    {?>
            
								<li class="comment byuser comment-author-zucchero bypostauthor even thread-even depth-1" id="comment-38">
					
									<div class="thecomment">
												
										<div class="author-img">
											
											<img alt="" src="images/gravatar.jpg" class="avatar avatar-50 photo" height="50" width="50">			
											
										</div><!-- END AUTHOR IMG -->
										
										<div class="comment-text">
											
											<p>
												
												<span class="author"><a href="#" rel="external nofollow" class="url"><?=$row['fullname']?></a></span>
												
												<span class="date"><?= date('d-m-Y h:i A',strtotime($row['date_added']))?></span>
												
											</p>
											
											<p><?=$row['comment']?></p></p>
										</div><!-- END COMMENT TEXT -->
												
									</div><!-- END COMMENT -->

									</li>
								<?php } ?>
									</ul>
									
           
						
						</div><!-- #respond -->
						
					</div> <!-- END POST-COMMENTS -->
		
				</div><!-- END COMMENTS -->						

										
			</div><!-- END CONTAINER -->
		
		</div><!-- END COMMENTS-BLOCK -->	


			</div><!-- END CONTAINER -->

	</div><!-- END COMMENTS -->	

	<!-- side bar on View page -->
	<div id='sidebar' class="sidebar">
				<div class="widget">
				<h5 class="block-heading" style="padding:20px;">Businesses Around you</h5>
				<ul>
				<table>
<tbody>
<tr>
<th class="views"><em>select Category</em></th>
<th></th>
</tr>
<?php 

	for($index = 0 ; $index < count($business); $index++){
// var_dump($business[$index]['name']);
	


	?>

<tr class="odd">
<form action='<?=base_url('business/business')?>' method='post'>
<td><h1><a href='<?=base_url('business/biz_listing/'.$business[$index]['name'])?>'><?=$business[$index]['name']?></h1>
<input hidden name='id' value='<?=$business[$index]['id']?>'/>
</td>
</form>

</tr>

<?php  }

?>
<td>
<td><em><a href='<?=base_url('business/biz_listing')?>'>see all category</a></em></td>
</tr>
</tbody>
</table>




				</ul>
				</div>
				</div>
	
		</div><!-- END CONTAINER -->

		</div>		
		</div>