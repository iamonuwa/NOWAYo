<?php
/**
 * Created by PhpStorm.
 * User: BILL
 * Date: 12/4/2015
 * Time: 10:50 PM
 */
//var_dump($blog);

$image = $this->userutitlities->getImageById($blog['theme_id']);
$image1 = $this->userutitlities->getImageById($blog['image_id']);
$picture = $image['link'];

?>

<section class="main">

    <div class="container">

        <div class="blog-main">

            <div class="blog-posts col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                    <?php if($blog['status'] ==='1'){ ?>

                    <article class="post page-post post-style-full-width col-sm-12 col-xs-12">
                        <div class="post-type-image"><a href="#"><img style="width: 100%" src="<?= base_url('uploads/'.$picture)?>" alt="<?= !empty($blog['name'])? $blog['name'] : $blog['swag_name']?>"></a></div>
                        <div class="post-meta">
                            <div class="post-cat">
                                <ul>
                                    <li class="cat"><a href="#"><?= $blog['field']?></a></li>

                                </ul>
                            </div><!-- post-cat -->
                            <div class="post-detail">Posted on <div class="post-date"><?php echo date('F jS, Y h:i:s A',$blog['time_updated']);?> </div> by <a href="#"><?=isset($blog['swag_name'])? $blog['swag_name']:$blog['name']?> </a> with <a href="#"><?=$this->comment_t > 0 ? $this->comment_t: 'no ' ?> comments</a></div>

                            <div class="post-title"><h1><?=$blog['title']?></h1></div>
                        </div><!-- post-meta -->

                        <div class="post-entry">
                            <blockquote>
                                <p><?=$blog['intro']?></p>
                            </blockquote>
                            <p><?= $blog['description']?></p>
                        </div><!-- post-entry -->

                        <div class="row">
                            <br />
                            <hr />
                        </div>

                        <!--Other nowayo blog updates i.e Posts-->
                        <?php foreach($posts as $key => $post):
                            $image = $this->userutitlities->getImageById($post['img_link_1']);
                            $picture = $image['link'];

                            ?>


                        <div class="post-type-image"><a href="#"><img style="width: 100%" src="<?= base_url('uploads/'.$picture)?>" alt="<?= !empty($post['name'])? $blog['name'] : $blog['swag_name']?>"></a></div>
                        <div class="post-meta">

                            <div class="post-cat">
                            </div><!-- post-cat -->


                            <div class="post-detail">Posted on <div class="post-date"><?php echo date('F jS, Y h:i:s A',$post['created']);?> </div> by <a href="#"><?=isset($blog['swag_name'])? $blog['swag_name']:$post['name']?> </a> with <a href="#"><?=$this->comment_t > 0 ? $this->comment_t: 'no ' ?> comments</a></div>

                            <div class="post-title"><h1><?=$post['post_title']?></h1></div>
                        </div><!-- post-meta -->

                        <div class="post-entry">

                            <p><?= strip_tags($post['post_content'])?></p>

                        </div><!-- post-entry -->
                            <div class="row">
                            <hr/>
                        </div>
                        <?php endforeach; ?>

                        <!--</close update>-->

                        <div class="post-tags">
                            <ul>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Traveling</a></li>
                                <li><a href="#">Work</a></li>
                                <li><a href="#">Changes</a></li>
                                <li><a href="#">Journey</a></li>
                            </ul>
                        </div><!-- post-tags -->

                        <div class="post-share">
                            <span>SHARE</span>
                            <div class="share-buttons">
                                <div class="facebook-buttons">
                                    <div id="fb-root"></div>
                                    <script src="https://platform.twitter.com/widgets.js" id="twitter-wjs"></script><script src="//connect.facebook.net/tr_TR/sdk.js#xfbml=1&amp;version=v2.5" id="facebook-jssdk"></script><script>(function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s); js.id = id;
                                            js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.5";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-like" data-layout="button"></div>
                                    <div class="fb-share-button" data-href="http://teamkraftt.com/" data-layout="button_count"></div>
                                </div><!-- facebook-buttons -->
                                <div class="twitter-button">
                                    <script>window.twttr = (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0],
                                                t = window.twttr || {};
                                            if (d.getElementById(id)) return t;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "https://platform.twitter.com/widgets.js";
                                            fjs.parentNode.insertBefore(js, fjs);

                                            t._e = [];
                                            t.ready = function(f) {
                                                t._e.push(f);
                                            };

                                            return t;
                                        }(document, "script", "twitter-wjs"));</script>
                                    <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
                                </div><!-- twitter-button -->
                                <div class="pinit-button">
                                    <script src="//assets.pinterest.com/js/pinit.js" data-pin-zero="true" async="" type="text/javascript"></script>
                                    <a data-pin-color="red" data-pin-do="buttonPin" data-pin-config="beside" always-show-count="true" null="" href="//www.pinterest.com/pin/create/button/"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" alt="pinterest"></a>
                                </div><!-- pinit-button -->
                            </div><!-- share-buttons -->
                            <div class="post-view"><i class="fa fa-eye"></i> 374</div>
                        </div><!-- post-share -->
                         <?php for ($x = 0; $x < count($uploaded); $x++){?>

                        <div class="post-type-image"><video controls style="width: 100%" src="<?= base_url('videos/'.$uploaded[$x]['link'])?>" alt="<?= !empty($blog['name'])? $blog['name'] : $blog['swag_name']?>"></video></div>
                        <div class="post-meta">
                            <div class="post-cat">
                                <ul>
                                    <!--<li class="cat"><a href="#"><?= $uploaded[$x]['title']?></a></li>-->

                                </ul>
                            </div><!-- post-cat -->
                            <div class="post-detail">Posted on <div class="post-date"><?php echo date('F jS, Y h:i:s A',$uploaded[$x]['server_created']);?> </div> by <a href="#"><?=isset($blog['swag_name'])? $blog['swag_name']:$blog['name']?> </a> with <a href="#"><?=$this->comment_t > 0 ? $this->comment_t: 'no ' ?> comments</a></div>

                            <div class="post-title"><h1><?=$uploaded[$x]['title']?></h1></div>
                            
                             <div class="post-entry">

                            <p><?= strip_tags($uploaded[$x]['description'])?></p>

                        </div><!-- post-entry -->
                        </div>
                        <?php } ?>
                    </article><!-- post -->

                    <div class="col-sm-12 col-xs-12">
                        <div class="post-directions">
                            <div class="prev-post col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <span>Previous Blog</span>
                                    <div class="post-title">
                                        <h2>How to Stay Creative &amp; Inspired Through The Day</h2>
                                    </div><!-- post-title -->
                                </a>
                            </div><!-- prev-post -->
                            <div class="next-post col-md-6 col-sm-6 col-xs-12">
                                <a href="#">
                                    <span>Next Blog</span>
                                    <div class="post-title">
                                        <h2>How to Stay Creative &amp; Inspired Through The Day</h2>
                                    </div><!-- post-title -->
                                </a>
                            </div><!-- next-post -->
                        </div><!-- post-directions -->
                    </div>
                    
                              
                    


                    

                    <div class="col-sm-12 col-xs-12">
                        <h1>About the Blogger</h1>
                        <hr/>
                        <div class="post-author " >
                            <div class="author-image col-sm-4 col-xs-12"><img style="..."src="<?=base_url('uploads/'.$image1['link'])?>" alt="Nowayo"></div>
                            <div class="author-info col-sm-8">
                                <div class="author-name"><h3><a href="#"><?=!empty($blog['swag_name'] ) ? $blog['swag_name'] : $blog['name']?></a></h3></div>
                                <div class="author-text">
                                    <p>Hi! My name is Jane. Born and raised in NYC and currently living in Brooklyn with my two dogs. My birthday is September 28th and I'm the epitome of a Libra and also somewhat into astrology. Aside from the people in my life, I cannot live without music, good coffee, chocolateand the occasional martini.</p>
                                </div><!-- author-text -->
<!--                                <div class="author-social">-->
<!--                                    <ul>-->
<!--                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>-->
<!--                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>-->
<!--                                        <li><a class="flickr" href="#"><i class="fa fa-flickr"></i></a></li>-->
<!--                                    </ul>-->
<!--                                </div><!-- author-social -->
                            </div><!-- author-info -->
                        </div><!-- post-author -->

                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <hr/>
                    </div>


<!--                    <div class="col-sm-12 col-xs-12">-->
<!--                        <div class="related-posts">-->
<!--                            <div class="single-item-title"><h4>Related Articles</h4></div>-->
<!--                            <div class="row">-->
<!--                                <article class="post post-related col-md-4 col-sm-4 col-xs-4">-->
<!--                                    <div class="post-type-image"><a href="#"><img src="images/related-post-image.jpg" alt="nowayo"></a></div>-->
<!--                                    <div class="post-title"><h2><a href="#">Meeting The Friendly Neighbours at Our Hometown</a></h2></div>-->
<!--                                </article><!-- post -->
<!--                                <article class="post post-related col-md-4 col-sm-4 col-xs-4">-->
<!--                                    <div class="post-type-image"><a href="#"><img src="images/related-post-image.jpg" alt="nowayo"></a></div>-->
<!--                                    <div class="post-title"><h2><a href="#">This Is My Beautiful Life</a></h2></div>-->
<!--                                </article><!-- post -->
<!--                                <article class="post post-related col-md-4 col-sm-4 col-xs-4">-->
<!--                                    <div class="post-type-image"><a href="#"><img src="images/related-post-image.jpg" alt="nowayo"></a></div>-->
<!--                                    <div class="post-title"><h2><a href="#">Tips for Planning a Cold Weather Vacation</a></h2></div>-->
<!--                                </article><!-- post -->
<!--                            </div><!-- row -->
<!--                        </div><!-- related-posts -->
<!--                    </div>-->

                    <div class="col-sm-12 col-xs-12">
                        <div class="comments-post">
                            <div class="single-item-title"><h4 style="background-color: #A40F09">Comments (<?=$this->comment_t ?>)</h4></div>

                            <div class="row">
                                <ul class="comment-list">

                                <?php 
                                if(!empty($comment)){
                                foreach($comment as $key => $value):
                                $user = $this->userutitlities->getUserDetails($value['user_id']);

                                ?>
                                    <li class="comment">
                                        <div class="comment-user-image"><img class="rounded" src="<?//= base_url('uploads/'.$this->aauth->is_loggedin()? $this->aauth->get_user()->profile_picture)
                                            //= base_url('assets/camtales/isee/images/post-comment.jpg')?>" alt="nowayo"></div>
                                        <div class="comment-info">
                                            <div class="comment-meta">
                                                <h4 class="author"><a href="#"><?=$user['fullname']?></a><span> <?= date('F jS, Y h:i:s A',$value['comment_id'])?></span></h4>
                                                <p><?= $value['comment'] ?></p>
                                                <div class="reply-button"><a href="#">Reply</a></div>
                                            </div><!-- comment-meta -->
                                        </div><!-- comment-info -->
                                    </li><!-- comment -->
                                <?php endforeach; 
                                }else{ ?>
                        <div class="col-sm-12 col-xs-12">
                            <div class="comments-post">
                                <div class="row">

                                    <!-- <ul class="comment-list"> -->
                                        <h3> No comment</h3>
                                    <!-- </ul> -->
                                </div>
                              </div>
                            </div>


                                    <?php } ?>
                                    
                                </ul><!-- comment-list -->
                            </div><!-- row -->

                        </div><!-- comments-post -->
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <div class="comment-respond">
                            <div class="single-item-title" ><h4 style="background-color: black;">Leave Your Comment</h4></div>

                            <?php if($this->aauth->is_loggedIn()){?>

                            <div class="row">
                                <form action="<?=base_url('blogger/'.$blog['presenter_id'].'/comment')?>" method="POST" class="comment-form">
                                    <div class="col-sm-12 col-xs-12">
                                        <p class="comment-form-comment">
                                            <textarea id="comment" name="comment" cols="45" rows="3" aria-required="true" required class="form-control" placeholder="Share your opiniono contribution... "></textarea>
                                        </p>
                                    </div>
                                    <p class="form-submit">
                                        <input name="userId" value="<?=$this->aauth->get_user()->id?>" type="hidden">
                                        <input name="post_id" value="<?=$blog['id']?>" type="hidden">
                                        <input type="submit" name="post" style="background-color: #A40F09; color: white" class="btn btn-default" value="Submit Comment"/>
                                    </p>
                                </form>
                            </div><!-- row -->
                            <?php }else{ ?>
                                <div class="row">
                            <div class="col-sm-12 col-xs-12">
<!--                            <div class="comments-post">-->
<!--                                <div class="row">-->
<!--                                    <ul class="comment-list">-->
                                        <h6> Login to Comment</h6>
<!--                                    </ul>-->
<!--                                </div>-->
<!--                              </div>-->
                            </div>
                                    </div>



                            <?php } ?>
                        </div>

                        </div><!-- comment-respond -->
                    </div>

                    <?php }else{?>
                        <div class="row">

                            <h3>Blog Have been disabled</h3>
                        </div>


                    <?php }?>
                </div><!-- row -->

<!--            </div>-->
        <!-- blog-posts -->




            <!-- Sidebar -->
            <div style="position: relative; overflow: visible; box-sizing: border-box; min-height: 4315px;" class="sidebar col-md-4 col-sm-12 col-xs-12">
                <!-- sidebar-wrapper -->
                <div style="padding-top: 0px; padding-bottom: 1px; position: absolute; width: 360px; top: 1345px;" class="theiaStickySidebar"><div class="sidebar-wrapper">

                        <aside class="widget">
                            <div class="widget-title"><h4>Most Popular Blogs</h4></div>

                            <div class="most-popular-widget">
                                <?php foreach($all as $k => $side):
//                                var_dump($side);
                                    if($side['presenter_id'] != $blog['presenter_id'] AND $side['status'] ==='1'){
                                        ?>

                                        <article class="post">
                                            <a href="<?=base_url('blogger/'.$side['presenter_id'])?>">
                                                <div class="post-date"><?php echo date('F jS, Y h:i:s A',$side['time_updated']);?></div>
                                                <div class="post-title"><h2><?=$side['title']?></h2></div>
                                                <div class="post-entry">
                                                    <p><?=$side['intro']?></p>
                                                </div><!-- post-entry -->
                                            </a>
                                        </article><!-- post -->
                                    <?php } endforeach;?>

                            </div>
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
                                    <?php foreach($all as $cat => $category):?>
                                        <li><a href="<?=base_url('blogger/'.$category['presenter_id'])?>"><?=$category['field']?></a></li>
                                    <?php endforeach; ?>

                                </ul>
                            </div><!-- popular-categories -->
                        </aside><!-- widget -->

                        <aside class="widget">
                            <div class="widget-title" class="bg-black"><h4>Prsenter's Events</h4></div>

                            <div class="favorite-posts">
                                <ul>
                                    <li class="post first-favorite-post">
                                        <div class="post-meta">
                                            <img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="Nowayo">
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
                                        <img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="Nowayo">
                                        <a href="#" class="post-meta">
                                            <span>02</span>
                                            <div class="post-title"><h2>Tips for Planning a Cold Weather Vacation</h2></div>
                                        </a><!-- post-meta -->
                                    </li><!-- post -->
                                    <li class="post list-favorite-post">
                                        <img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="Nowayo">
                                        <a href="#" class="post-meta">
                                            <span>03</span>
                                            <div class="post-title"><h2>How to Stay Creative &amp; Inspired Through The Day</h2></div>
                                        </a><!-- post-meta -->
                                    </li><!-- post -->
                                    <li class="post list-favorite-post">
                                        <img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="Nowayo">
                                        <a href="#" class="post-meta">
                                            <span>04</span>
                                            <div class="post-title"><h2>A Quick No Hype Guide to the Paradise Pack</h2></div>
                                        </a><!-- post-meta -->
                                    </li><!-- post -->
                                    <li class="post list-favorite-post">
                                        <img src="<?= base_url('assets/camtales/isee/images/favorite-post-image-wide.jpg')?>" alt="Nowayo">
                                        <a href="#" class="post-meta">
                                            <span>05</span>
                                            <div class="post-title"><h2>Keep Your Job, Travel the World &amp; Change Your Life</h2></div>
                                        </a><!-- post-meta -->
                                    </li><!-- post -->
                                </ul>
                            </div><!-- favorite-posts -->
                        </aside><!-- widget -->

                    </div></div></div>



            <!-- sidebar -->

        </div> <!-- blog-main -->
    </div><!-- container -->

</section>
