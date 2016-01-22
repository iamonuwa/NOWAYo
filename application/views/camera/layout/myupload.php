<?php
$count = 1;
?>

<h2>My Uploads&nbsp;<small>My Pictures</small></h2>

<hr/>

<div class="container-fluid">
    <div class="row-fluid">

        <?php
        do {
            $count++
            ?>

            <div class="span4">
                <ul class="thumbnails">
                    <li class="span12">
                        <a href="#myModal" role="button"  class="thumbnail" data-toggle="modal">
                            <img data-src="holder.js/300x200" src="assets/img/thumb.jpg" alt="">
                        </a>                        
                    </li>
                </ul>
            </div>
            
        <?php } while ($count < 4) ?>  
    </div>
    <div class="row-fluid">


        <div class="span4" style="text-align: center;">
            <h3>Album 1</h3>
            <small>created: 02/02/2012</small>
        </div>
        <div class="span4" style="text-align: center;">
            <h3>Album 2</h3>
            <small>created 02/02/2014</small>
        </div>
        <div class="span4" style="text-align: center;">
            <h3>Album 3</h3>
            <small>created 02/02/2015</small>
        </div>
    </div>
    <hr/>
    <div class="row-fluid padding20">
        <button class="btn-large"><i class="icon-plus"></i>&nbsp;Upload Images</button>&nbsp;&nbsp;&nbsp;

        <!--&nbsp;&nbsp;&nbsp;<button class="btn-large fg-black"><i class="icon-folder-open"></i>&nbsp;Create Album</button>-->

    </div>

</div>