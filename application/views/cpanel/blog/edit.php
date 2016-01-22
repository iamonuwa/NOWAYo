<?php
// var_dump($edit['description']);
// var_dump($edit);
// echo "<br/>";



//tinymce.cachefly.net/4.2/tinymce.min.js
?>
<h4>Edit <?=$edit['title']?></h4>
    <script src="<?php base_url('assets/tinymce/tinymce.min')?>"></script>
<script>tinymce.init({selector:'textarea'});</script>
<form class="form-horizontal span6" enctype='multipart/form-data' method="post" action="<?= isset($edit) ? base_url("cp/presenter_blog/edit/".$edit['id']):base_url("cp/presenter_blog/create") ?>" charset="utf-8">
<fieldset>
	 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Blog Title</label>


                      <div class="col-md-8">
                         <input class="form-control input-sm" type="text" name="blog_title" value="<?=$edit['title']?>" id='title'  placeholder=
                            'e.g Youth and Unemployment' required />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label"for="name">Presenter's Name</label>
                  <div class="col-md-4">
                  <input name="presenter_name" class="form-control input-sm"  value=""  placeHolder="e.g Joe Doe" required title="Presenter's Name" maxlength="100"/>
                  </div>
                  <div class="col-md-4">
                  <input class="form-control input-sm" name="presenter_swagz"  value="" placeHolder="Stage Name, e.g Dj Swagzz (optional)" title="Stage Name" maxlength="100"/>
                  </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Presenter State</label>

                      <div class="col-md-8">
                         <select <?=isset($edit) ? 'disabled':''?> name= "pre_state" class="col-md-12" required>
                         <option value="NULL">-Select State-</option>
                            <?php foreach ($state as $key => $value) {
                              echo '<option value = "'.$value['state_id'].'">'.$value['state_name'].'</option>';
                            }?>
                        </select>
                      </div>

                      
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Blog Category</label>
                  <div class="col-md-8">
                  <input class="form-control input-sm" title="Blog's Category" <?=isset($edit) ? "value=".$edit['field']."":''?> required name="presenter_cat" PlaceHolder="e.g Fashion, Celebrity Gossip"/>
                  </div>
                  
                  </div>

                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Blog Introduction</label>
                  <div class="col-md-8">
                  <input value="<?= $edit['intro']?>" class="form-control input-sm" title="get to explain about your blog" id="location" name="introd_blog" required placeholder=
                            "e.g. Scope of Research (Should be brief)" type="text" maxlength="70" >
                  </div>
                 
                  </div>
                  </div>


                  <div class="form-group">
                   <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Full Description</label>
                      <div class="col-md-8">
            <textarea class="summernote form-control col-md-12" value="" name="blog_desc" data-height="200" placeholder="Describe your blog. (e.g. Article about your blog title)"><?=$edit['description']?></textarea>

          </div>
          </div>
                  </div>
                   <div class="form-group">
                     <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "images">select Illustraion Image</label>

                      <div class="col-md-2">
                         <input name="blog_banner" <?=isset($edit) ? "  disabled":""?> id="fileupload" type="file"  >
                      </div>
                      </div>
                      <div class="col-md-8">

                      <label  class="col-md-4 control-label" for="presenter_photo">Presenter's Photo</label>
                      <div class="col-md-4">
                      <input type="file" <?=isset($edit) ? 'disabled':''?> name="blog_pic" id=""/>
                      </div>
                      </div>
                      <input type="hidden" name="userid" value="<?=isset($edit) ? $edit['presenter_id'] : ''?>">
                 
                    </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="btn-group">
                        <button class="btn btn-default" name="<?=isset($edit) ? 'update':'save'?>" type="submit" ><?=isset($edit) ? 'Update':'Publish'?></button>

                        <a href="<?=base_url('cp/presenter_blog')?>"><button style="background-color:red" class="btn btn-default" name="cancel" type="" >Cancel</button><a>
                        
                   
                      </div>
                    </div>
                  </div>


</fieldset>
</form>
<?php
 // var_dump($edit['title']);?>
