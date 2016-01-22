<?php
//var_dump($all_posts);

//var_dump($uploaded);
?>

<!-- MAIN BLOG -->
<section class="main">


<div class="featured-container">
			<div class="featured-posts colum-5">
               <!-- featured-post -->
				<?php foreach ($all as $key => $blog):

					$image = $this->userutitlities->getImageById($blog['image_id']);
					$picture = $image['link'];
					?>

				<article class="post featured-post">
					<a href="<?=base_url('blogger/'.$blog['presenter_id'])?>">
					<div class="post-type-image">
							<img  style="width: 478px; height:384px;" src="<?= base_url('uploads/'.$picture)?>" alt="Nowayo Blogs">
<!--							<img  style="width: 380px; length:480px; " src="--><?//= base_url('assets/camtales/isee/images/featured-post-image-384x480.jpg')?><!--" alt="nowayo">-->
						</div></a>
					<div class="featured-post-content">
						<div class="featured-post-meta">
							<div class="post-cat">
								<ul>
									<li><a href="<?=base_url('blogger/'.$blog['presenter_id'])?>"><?= $blog['field']?></a></li>
									<li><a href="<?=base_url('blogger/'.$blog['presenter_id'])?>"><?= $blog['intro'] ?></a></li>
								</ul>
							</div><!-- post-cat -->
							<div class="post-title"><a href="<?=base_url('blogger/'.$blog['presenter_id'])?>"><h2><?=$blog['title']?></h2></a></div>
							<div class="post-entry">
								<p><?= substr(strip_tags($blog['description']), 0, 50)?>...</p>
							</div><!-- post-entry -->
						</div><!-- featured-post-meta -->
					</div><!-- featured-post-content -->
				</article><!-- featured-post -->
				<?php endforeach; ?>






			</div><!-- featured-posts -->

			<div class="featured-posts-controls">
				<ul>
					<li class="sl-prev"><a><i class="fa fa-angle-left"></i></a></li>
					<li class="sl-next"><a><i class="fa fa-angle-right"></i></a></li>
				</ul>
			</div><!-- featured-posts-controls -->
		</div><!-- featured-container -->

		<div class="container">

			<div class="most-popular-posts">



			</div><!-- most-popular-posts -->
			<div class="blog-main">

				<div class="blog-posts col-md-8 col-sm-12 col-xs-12">
					<div class="row">

						<?php foreach($all as $key => $item ):

							$image = $this->userutitlities->getImageById($item['theme_id']);
							$this->comment_t = $this->userutitlities->countCommentId($item['id']);
							$picture = $image['link'];

							?>

						<article class="post post-style-full-width col-sm-12 col-xs-12">
							<div class="post-meta">
								<div class="post-date"><?php echo date('F jS, Y h:i:s A',$item['time_updated']);?></div>

								<div class="post-title"><h2><a href="#"><?=$item['title']?></a></h2></div>
								<div class="post-cat">
									<ul>
										<li class="cat"><a href="#"><?=$item['field']?></a></li>

									</ul>
								</div><!-- post-cat -->
							</div><!-- post-meta -->
							<div class="post-type-image"><a href="#"><img style="width: 1200%;>" src="<?= base_url('uploads/'.$picture)?>" alt="nowayo"></a></div>
							<div class="post-entry">
<!--								<p>If you’ve followed this blog since the beginning (the very first post was on April 26, 2008) then you might remember this site’s tagline was once: “Quit Your Job. Travel the World.”</p>-->
								<p><?=substr(strip_tags($item['description']), 0, 800).'...'?></p>

							</div><!-- post-entry -->
							<div class="read-more-button hvr-bounce-to-top">
								<a href="<?=base_url('blogger/'.$item['presenter_id'])?>">Continue Reading</a>
							</div><!-- read-more-button -->
							<div class="post-bottom">
								<div class="post-comments"><a href="#"><?=!empty($this->comment_t) ? $this->comment_t : "No"?> Comment(s)</a></div>
								<div class="post-share">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="mail" href="#"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div><!-- post-share -->
								<div class="post-author">Blogger:<a href="#"> <?=isset($item['swag_name']) ? $item['swag_name'] : $item['name']?></a></div>
							</div><!-- post-bottom -->
						</article><!-- post -->
						<?php endforeach; ?>



						<article class="post post-style-full-width col-sm-12 col-xs-12">
							<div class="post-meta">
								<div class="post-date">August 10, 2015</div>
								<div class="post-title"><h2><a href="#">I Hear the Fragile Beauty of Mortal Earth</a></h2></div>
								<div class="post-cat">
									<ul>
										<li class="cat"><a href="#">featured Post: Music &amp; Video</a></li>
									</ul>
								</div><!-- post-cat -->
							</div><!-- post-meta -->
							<div class="post-type-sound">
								<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/179647213&amp;color=c16fb6&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false" height="166" width="500"></iframe>
							</div><!-- post-type-sound -->
							<div class="post-entry">
								<p>In this composition, the composer strived for a similar experience of encountering an (musical) object. This quest led to a research-oriented approach towards the musical material – an approach in which the chosen musical material is employed as a singular object investigated several times throughout the time-continuum of the piece.</p>
								<p>In other words, the musical material is regarded as a prism viewed from different angles and under different lightings. Hence, the musical material is not used as a departure point that would ‘lead somewhere’; an entity that needs to be ‘developed’, ‘processed’ and eventually ‘transformed’ into something else.</p>
							</div><!-- post-entry -->
							<div class="read-more-button hvr-bounce-to-top">
								<a href="#">Continue Reading</a>
							</div><!-- read-more-button -->
							<div class="post-bottom">
								<div class="post-comments"><a href="#">1 Comment</a></div>
								<div class="post-share">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="mail" href="#"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div><!-- post-share -->
								<div class="post-author">by<a href="#">Jane Doe</a></div>
							</div><!-- post-bottom -->
						</article><!-- post -->

						<article class="post post-style-full-width col-sm-12 col-xs-12">
							<div class="post-type-quote">
								<img src="<?= base_url('assets/camtales/isee/images/post-quote.jpg')?>" alt="nowayo">
								<div class="post-quote-link">
									<i class="fa fa-quote-left"></i>
									<a href="#">Fashion is not something that exists in dresses only. Fashion is in the sky, in the street, fashion has to do with ideas, the way we live, what is happening.</a>
									<h5>Coco Chanel</h5>
								</div><!-- post-quote-link -->
							</div><!-- post-type-quote -->
							<div class="post-bottom">
								<div class="post-comments"><a href="#">No Comments Yet</a></div>
								<div class="post-share">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="mail" href="#"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div><!-- post-share -->
								<div class="post-author">by<a href="#">Jane Doe</a></div>
							</div><!-- post-bottom -->
						</article><!-- post -->

						<article class="post post-style-full-width col-sm-12 col-xs-12">
							<div class="post-meta">
								<div class="post-date">August 10, 2015</div>
								<div class="post-title"><h2><a href="#">Reimagining Holiday Leftovers for the Ride Home</a></h2></div>
								<div class="post-cat">
									<ul>
										<li class="cat"><a href="#">Travel</a></li>
										<li class="cat"><a href="#">Food &amp; Drink</a></li>
									</ul>
								</div><!-- post-cat -->
							</div><!-- post-meta -->
							<div style="height: 460px;" class="post-type-gallery justified-gallery">
                                                            <?php //for($x = 0; $x < count($uploaded); $x++){?>
								<a height="256" width="175"style="width: 175px; height: 256px; top: 2px; left: 2px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-1.jpg')?>"><img style="width: 175px; height: 256px; margin-left: -87.5px; margin-top: -128px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-2-thumb.jpg')?>" alt="nowayo"></a>
                                                                <?php //}?>
								<a style="width: 387px; height: 256px; top: 2px; left: 179px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-2.jpg')?>"><img style="width: 387px; height: 256px; margin-left: -193.5px; margin-top: -128px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-2-thumb.jpg')?>" alt="nowayo"></a>
								<a style="width: 175px; height: 256px; top: 2px; left: 568px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-1.jpg')?>"><img style="width: 175px; height: 256px; margin-left: -87.5px; margin-top: -128px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-1-thumb.jpg')?>" alt="nowayo"></a>
								<a style="width: 301px; height: 198px; top: 260px; left: 2px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-4.jpg')?>"><img style="width: 301px; height: 198px; margin-left: -150.5px; margin-top: -99px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-4-thumb.jpg')?>" alt="nowayo"></a>
								<a style="width: 135px; height: 198px; top: 260px; left: 305px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-5.jpg')?>"><img style="width: 135px; height: 198px; margin-left: -67.5px; margin-top: -99px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-5-thumb.jpg')?>" alt="nowayo"></a>
								<a style="width: 301px; height: 198px; top: 260px; left: 442px; opacity: 1;" class="post-lightbox jg-entry" href="<?= base_url('assets/camtales/isee/images/gallery-post-4.jpg')?>"><img style="width: 301px; height: 198px; margin-left: -150.5px; margin-top: -99px;" src="<?= base_url('assets/camtales/isee/images/gallery-post-4-thumb.jpg')?>" alt="nowayo"></a>
							</div><!-- post-type-gallery -->
							<div class="post-entry">
								<p>I am such a sucker for studies about kids’ behaviors. The footage of a little girl trying to avoid eating a marshmallow? Empathy tests involving a room of toddlers? Aw, such charming little subjects. One such study that has stuck with me for years was watching preschoolers choose a sticker-festooned rock over a cupcake.</p>
								<p>What researchers set out to prove was that kids prefer foods bearing the likeness of characters, particularly familiar ones. I didn’t have children at the time, but I remember filing it away: “Stickers on carrots! Stickers on broccoli!” (Say what?!)</p>
								<p>With Thanksgiving approaching, I was thinking about how to get the visual-appeal-voodoo working on all of us for that post-holiday car ride home.</p>
							</div><!-- post-entry -->
							<div class="read-more-button hvr-bounce-to-top">
								<a href="#">Continue Reading</a>
							</div><!-- read-more-button -->
							<div class="post-bottom">
								<div class="post-comments"><a href="#">5 Comments</a></div>
								<div class="post-share">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="mail" href="mailto:info@teamkraftt.com"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div><!-- post-share -->
								<div class="post-author">by<a href="#">Jane Doe</a></div>
							</div><!-- post-bottom -->
						</article><!-- post -->

					</div><!-- row -->

					<div class="pagination">
						<a class="older" href="index-page2.html">Older Posts <i class="fa fa-angle-double-right"></i></a>
					</div><!-- pagination -->
				</div><!-- blog-posts -->

				<!-- Sidebar -->
				<div style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;" class="sidebar col-md-4 col-sm-12 col-xs-12">
					<!-- sidebar-wrapper -->
					<div style="padding-top: 0px; padding-bottom: 1px; position: static;" class="theiaStickySidebar"><div class="sidebar-wrapper">

							<aside class="widget">
								<div class="widget-title"><h4 class="bg-black">My Favorites</h4></div>

								<div class="favorite-posts">
									<ul>
										<li class="post first-favorite-post">
											<div class="post-meta">
												<img src="<?= base_url('assets/camtales/isee/images/favorite-post-image.jpg')?>" alt="nowayo">
												<a href="#" class="post-detail">
													<div class="post-wrapper">
														<div class="post-cat">
															<ul>
																<li>Fashion</li>
															</ul>
														</div><!-- post-cat -->
														<div class="post-title"><h2>Summer Essentials</h2></div>
													</div><!-- post-wrapper -->
												</a><!-- post-detail -->
											</div><!-- post-meta -->
										</li><!-- post -->

										<li class="post list-favorite-post">
											<img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="nowayo">
											<a href="#" class="post-meta">
												<span>02</span>
												<div class="post-title"><h2>Tips for Planning a Cold Weather Vacation</h2></div>
											</a><!-- post-meta -->
										</li><!-- post -->
										<li class="post list-favorite-post">
											<img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="nowayo">
											<a href="#" class="post-meta">
												<span>03</span>
												<div class="post-title"><h2>How to Stay Creative &amp; Inspired Through The Day</h2></div>
											</a><!-- post-meta -->
										</li><!-- post -->
										<li class="post list-favorite-post">
											<img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="nowayo">
											<a href="#" class="post-meta">
												<span>04</span>
												<div class="post-title"><h2>A Quick No Hype Guide to the Paradise Pack</h2></div>
											</a><!-- post-meta -->
										</li><!-- post -->
										<li class="post list-favorite-post">
											<img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="nowayo">
											<a href="#" class="post-meta">
												<span>05</span>
												<div class="post-title"><h2>Keep Your Job, Travel the World &amp; Change Your Life</h2></div>
											</a><!-- post-meta -->
										</li><!-- post -->
									</ul>
								</div><!-- favorite-posts -->
							</aside><!-- widget -->

							<aside class="widget">
								<div class="widget-title"><h4>I'm Social</h4></div>

								<div class="social-counter">
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>1348</span></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>3769</span></a></li>
										<li><a class="instagram" href="#"><i class="fa fa-instagram"></i><span>6452</span></a></li>
									</ul>
								</div><!-- social-counter -->
							</aside><!-- widget -->

							<aside class="widget">
								<div class="widget-title"><h4>Popular Categories</h4></div>

								<div class="popular-categories">
									<ul>
										<?php foreach($all as $key => $value):?>
										<li><a href="<?=base_url('blogger/'.$item['presenter_id'])?>"><?=$value['field']?></a></li>
										<?php endforeach; ?>

									</ul>
								</div><!-- popular-categories -->
							</aside><!-- widget -->

							<aside class="widget newsletter-widget">

								<div class="widget-title"><h4>Newsletter Sign up</h4></div>
								<div class="widget-description">Sign up now and get every new post delivered to your inbox.</div>

								<form method="post" id="newsletterForm">
									<input class="form-control" name="email" placeholder="Enter Your Email" type="email">
									<button type="submit" class="btn btn-default">Sign Up</button>
								</form><!-- newsletterForm -->

							</aside><!-- widget -->

							<aside class="widget">
								<div class="widget-title"><h4>Recent Post</h4></div>

								<div class="most-popular-widget">
									<?php for($count = 0; $count < count($all_posts); $count++):

//										//var_dump($all_posts[$count]['post_content']);
										?>

									<article class="post">
										<a href="#">
											<div class="post-date"><?php
												 echo date('F jS, Y h:i:s A',$all_posts[$count]['created']);?></div>
											<div class="post-title"><h2><?=$all_posts[$count]['post_title']?></h2></div>
											<div class="post-entry">
												<p><?=empty($all_posts[$count]['post_content']) ? 'Empty Field': substr(strip_tags($all_posts[$count]['post_content']), 0, 50).'...'?></p>
											</div><!-- post-entry -->
										</a>
									</article><!-- post -->
									<?php endfor; ?>

								</div>
							</aside><!-- widget -->

						</div></div></div><!-- sidebar -->

			</div> <!-- blog-main -->
		</div>

</section>