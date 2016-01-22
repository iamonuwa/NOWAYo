<?php

// var_dump($name);
// print_r($state);

?>
<form class="form-horizontal span6" enctype='multipart/form-data' method="post" action="<?=base_url('cp/add_ads')?>" charset="utf-8">
<fieldset>
	 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name">Title</label>

                      <div class="col-md-8">
                         <input class="form-control input-sm" id="title" name="title" placeholder=
                            "Enter the Business name" type="text" value="<?= $this->session->set_flashdata('msg')? $name :	''?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Select Ad State</label>

                      <div class="col-md-8">
                         <select name = "ad_state" required>
      <?php foreach ($state as $key => $value) {
        echo '<option value = "'.$value['state_id'].'">'.$value['state_name'].'</option>';
      }?>
    </select>
                      </div>

                      
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-8">
                  <label class="col-md-4 control-label" for='category'>Select Ad Category</label>
                  <div class="col-md-4">
                  <select name='ad_category' disabled="">
                  <option>-Select-</option>
                  	<option>Fashion</option>
                  	<option>Computer and Technology</option>
                  </select>
                  </div>
                  <div class="col-md-4">
                  <input type="text" class="form-control input-sm" id='number' required name='number'
                  placeHolder='Phone number' title="Contact Person">
                  </div>
                  </div>

                  </div>
                  <div class="form-group">
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
                  </div>


                  <div class="form-group">

                      <div class="col-md-12">
            <textarea class="summernote form-control" name="descrip" data-height="200" placeholder="Business Description (Tell the world about your business)"></textarea>

          </div>
                  </div>
                   <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "images">Upload Image/Design</label>

                      <div class="col-md-8">
                         <input  name="userfile"  id="fileupload" type="file" value="" required>
                      </div>
                    </div>
                  </div>
            
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-default" name="save" type="submit" >Save</button>
                      </div>
                    </div>
                  </div>


</fieldset>
</form>