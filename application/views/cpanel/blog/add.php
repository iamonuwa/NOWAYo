<?php

// echo "<br/>";



//tinymce.cachefly.net/4.2/tinymce.min.js
?>
<h4></h4>
    <script src="<?php base_url('assets/tinymce/tinymce.min')?>"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form class="form-horizontal span6" enctype='multipart/form-data' method="post" action="<?= base_url('cp/presenter/blog/post/add/new')?>" charset="utf-8">
<fieldset>
	 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Post Title</label>


                      <div class="col-md-8">
                         <input class="form-control input-sm" type="text" name="post_title" placeholder="e.g PHCN is Worst than NEPA" id='title'  required />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  
                  <label class="col-md-4 control-label"for="name">Select Blog</label>
                  <div class="col-md-8">
                  <select name="post_category" class="form-control input-select"  required title="Select Blog you want publish the post on">
                  <option>-Select-</option>
                  <?php foreach($post as $pos => $key){
                    
                  }
                  for ($index = 0; $index < count($blogs) ; $index++) {


                    ?>
                  <option value="<?=$blogs[$index]['id']?>"><?= !empty($blogs[$index]['name']) ? $blogs[$index]['name']: $blogs[$index]['swag_name']?>'s Blog</option>
                  <?php } ?>
                  </select>
                  </div>
                  </div>
                  </div>

                  
                  
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Blog Introduction <small>max length 100cpw</small></label>
                  <div class="col-md-8">
                  <input value="" class="form-control input-sm" title="get to explain about your blog" id="location" name="post_intro" required placeholder=
                            "e.g. Scope of Research (Should be brief)" type="text" maxlength="200" >
                  </div>
                 
                  </div>
                  </div>


                  <div class="form-group">
                   <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Full Description</label>
                      <div class="col-md-8">
            <textarea class="summernote form-control col-md-12" value="" name="post_content" data-height="200" placeholder="Describe your blog. (e.g. Article about your blog title)"></textarea>

          </div>
          </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "images">select Illustraion Image</label>

                      <div class="col-md-4">
                         <input name="image_post" id="fileupload" type="file"  >
                      </div>
                      </div>
                      <!-- <div class="col-md-8">

                      <label  class="col-md-4 control-label" for="pic_illustrate">Illustration Image</label>
                      <div class="col-md-4">
                      <input type="file" name="post_image2" id=""/>
                      </div>
                      </div>
                       -->
                      <div class="col-md-8">
                      
                      </div>
                    </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="btn-group">
                        <input class="btn btn-default" name="submit" type="submit" value="POST" />

                        <a href="<?=base_url('cp/presenter_blog')?>"><button style="background-color:red" class="btn btn-default" name="cancel" type="" >Cancel</button><a>
                        
                   
                      </div>
                    </div>
                  </div>


</fieldset>
</form>

