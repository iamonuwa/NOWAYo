<?php
$request = filter_input(INPUT_GET, "view");
?>

            <?php //require_once './header.php'; ?>
            <div class="hero-unit" style="background-image: url(assets/img/image_back.jpg);">
                <h1>CAM TALES</h1>
                <p>Get your daily affairs uploaded and win a price for the most natural</p>
                <p>    
                    <a class="btn btn-primary btn-large">
                        Learn more
                    </a> </p>
            </div>
            <div class="fluid">
                <div class="btn-group">
                    <a href="index.php?view=activity_log"><button class="btn <?= empty($request) || $request === 'activity_log' ? 'active' : '' ?>"><i class="icon-cog"></i>&nbsp;Recent Activity</button></a>
                    <a href="index.php?view=myUploads"><button class="btn <?= $request === 'myUploads' ? 'active' : '' ?>"><i class="icon-picture"></i>&nbsp;My Uploads</button></a>
                </div>
                
            </div>
            <div class="container-fluid">
                <div class="row-fluid">

                    <div class="span9">
                        <?php if (empty($request) || $request === "activity_log") { ?>

                            <h2>Activity Logs</h2>
                            <hr/>
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <?php for ($counter = 1; $counter < 4; $counter++) {
                                        ?>
                                        <div class="span7">
                                            <hr/>

                                            <small><i class="icon-tint"></i>&nbsp;Updated: Just now</small>
                                            <hr/>
                                            <img src="assets/img/bootstrap-mdo-sfmoma-01.jpg" class="img-rounded"> 
                                        </div>
                                        <div class="span4 padding20">
                                            <i class="icon-comment"></i><small>&nbsp;50 Comments</small>
                                            <small style="color:red;">1.2k Likes</small>
                                            <hr/>
                                            <h5><strong>@userHandle</strong> &nbsp;Commented on</h5>
                                            <small>Nice Pic</small>
                                            <hr style="background-color:red;"/>
                                            <form>
                                                <small>Comment</small>
                                                <textarea row="3" placeHolder="type comment... "></textarea>
                                            </form>

                                        </div>


                                    <?php } ?>
                                </div>
                            </div>

                            <?php
                        } elseif ($request === "myUploads") {
                            require_once './myupload.php';
                            ?>

                        <?php } ?>
                    </div>
                    <div class="span3">
                        <h3 style="color: whitesmoke;">Hottest Events</h3>
                        <hr/>
                        <a href="#"><li>A visit to National Musuem</li></a>
                        <span class="divider"></span>
                        <a href="#"><li>A visit to National Musuem</li></a>
                        <a href="#"><li>A visit to National Musuem</li></a>
                        <a href="#"><li>A visit to National Musuem</li></a>

                    </div>
                </div>
            </div>
        </div>

