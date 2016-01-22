<?php

// var_dump($name);
// print_r($state);

?>
    <script type="text/javascript" src="<?php echo base_url('assets/cpanel/tiny_mce/tiny_mce.js');?>"></script>

<form class="form-horizontal span6"  method="post" action="<?=base_url('cp/business_list/update')?>" id="mytextarea" class="comment-form">
<fieldset>
	<!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Title</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="title" name="title" placeholder=
                            "Enter the Business name" type="text" value="" required>
                      </div>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Select State</label>

                      <div class="col-md-8">
                         <select name= "ad_state" class="col-md-12" required>
      <?php foreach ($state as $key => $value) {
        echo '<option value = "'.$value['state_id'].'">'.$value['state_name'].'</option>';
      }?>
    </select>
                      </div>

                      
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Select Category</label>
                  <div class="col-md-4">
                  <select disabled="" name='ad_category' class="col-md-12" required="">
                  <option>-Select-</option>
                  <?php 
                  $category_list = $this->userutitlities->ConvertMatch('nowayo_biz_cat', NULL);
                  foreach ($category_list as $key => $value) { ?>
                    <option value="<?=$value['id']?>"><?=$value['name']?></option>
                  <?php }

                  ?>
                  </select>
                  </div>
                  </div>
                  </div>
                  <!-- <div class="col-md-4">
                  <input type="text" class="form-control input-sm" id='number' required name='number'
                  placeHolder='Phone number' title="Contact Person">
                  </div>
                  </div> -->

                  <!-- </div> -->
                  <!-- <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Business Location</label>
                  <div class="col-md-4">
                  <input class="form-control input-sm" id="location" name="location" required placeholder=
                            "Address" type="text" value="">
                  </div>
                  <div class="col-md-4">
                  <input class="form-control input-sm" id="webite_url" title='Business Website' name="website" placeholder=
                            "www.businesswebsite.com" type="text" value="">
                  </div>
                  </div>
                  </div> -->


                  <div class="form-group">
                  <!-- <form action="<?php //  base_url('news/add_comment/'.$news[0]['news_id'].'/'.$news[0]['news_title_url']);?>" method="post" id="commentform" class="comment-form">
                                                                                  
                <p class="comment-form-comment">
                <textarea id="wysiwyg" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p>                       
                
                <p class="form-submit">
                
                  <input name="submit" type="submit" id="submit" class="submit" value="Send">
                
                </p>
                
                <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="ad98983357">
                 -->
              <!-- </form> -->
              

                   <div class="col-md-8">

                  <label class="col-md-4 control-label" for='category'>Type Business List</label>
                 
                  

                      <div class="col-md-8">
                      <p>
                      <!-- <textarea id="wysiwyg" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p>                        -->
            <textarea id="wysiwyg" class="summernote form-control col-md-12" name="descrip" data-height="400"  placeholder="you can copy and paste or type directly"></textarea></p>

          </div>
          </div>
                  </div>
                  <!--  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "images">Upload Image/Design</label>

                      <div class="col-md-8">
                         <input  name="userfile"  id="fileupload" type="file" value="" >
                      </div>
                    </div>
                  </div>
             --><!-- 
             <div class="form-group"> -->
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="btn-group">
                        <button class="btn btn-default" name="save" type="submit" >Save</button>

                        <a href="<?=base_url('cp/business_list/list_biz')?>"><button style="background-color:red" class="btn btn-default" name="cancel" type="" >Cancel</button><a>
                   
                      </div>
                    </div>
                  <!-- </div>
 -->

</fieldset>
</form>