<div class="editors-picks divblock" >
						
            <div class="container">

    <h3 class="block-heading">Create News Content</h3>

    <div class="wpcf7" id="wpcf7-f853-p402-o1" lang="en-US" dir="ltr">

<?php echo form_open_multipart('blog/create');?>

    <div class="grid">

    <div class="form-group ">
              
    <input type="text" name="title"  class="grid grid-1" required placeholder="Content Headline">
            
    </div>
<!--
   	<label for="active"><input type="radio" name="active" value="1" checked />Active</label>

   	<label for="inactive"><input type="radio" name="active" value="0" checked />Inactive</label>

   -->

    <div class="form-group ">

    <input type="file" name="userfile[]" id="fileupload" class="user_input" size="20" multiple="multiple" required/>

    </div>
		<div class="form-group ">
    <span class="wpcf7-form-control-wrap your-message">
    <textarea  name="content" id="elm1" cols="30" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"  placeholder="Type Content Here">
    </textarea required>
    </span>
	  </div>
    <input type="submit" name="save"  class="wpcf7-form-control wpcf7-submit" value="Upload To ISee ISay">
								
  </div>
	</form>
	</div>
	</div>
  </div>