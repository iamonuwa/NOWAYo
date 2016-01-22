<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump($blogger);
?>
<div class="container-fluid">
    <div class="row">
        
        
    </div>
    <div class="row">
        <?php if(isset($saved)){?>
        <div class="col-md-5">
        
        <video controls src="<?=base_url('videos/'.$saved['link'])?>" width="400" height="300"></video>
        </div>
        <div class="col-md-7">
            <!--<form class="form-group" action="<?//=base_url('cp/blogger/upload/publish/'.$saved['server_created'])?>" method="POST"-->
            <a href="<?=base_url('cp/presenter/'.$blogID.'/upload/publish/'.$saved['vidID'])?>"><input class="btn btn-primary" value="Publish Video" type="submit" name="post"></a>
            <!--</form>-->
            <div class="row ">                            
             <h4><?=$saved['title']?></h4>
            <p><?=$saved['description']?></p>
            
            </div>
        </div>
        <?php }else{ ?>
        <h3>No File Uploaded</h3>
        <?php }?>
    </div>
    <div class="row well"></div>
    
    <div class="row">
        <div class="col-md-8">
            <form role="form" enctype="multipart/form-data" action="<?=base_url('cp/presenter/'.$blogID.'/upload')?>" method="POST">
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" value="<?=!empty($title) ? $title : ''?>" name="title" placeHolder="Enter Title..." required/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                    <div class="col-md-4">
                    <label for="inputFile">Upload Video</label>
                    </div>
                    <div class="col-md-6">
                        
                        <input type="file" id="inputVideo" class="" name="video" required placeHolder="<?=!empty($filename) ? $filename : ''?>"></input>
                    <p>Select a file to upload (max = 20MB)</p>
                    
                    
                    </div>
                </div>
                    <div class="row">
                    <div class="col-md-4">
                        
                        <label for="comment" >Description/Comment</label>
                    </div>
                    <div class="col-md-8">
                        <textarea class="form-control"  placeHolder="Describe the video..." required name="comment" class="col-sm-6" value=""><?=!empty($comment) ? $comment : ''?></textarea>
                        
                    </div>
                    </div>
                   <input type="submit" value="Upload" class="btn btn-primary" name="post">

                    
                    
                </div>
            </form>
        </div>
    </div>
</div>