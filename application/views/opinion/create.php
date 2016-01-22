<?php 
if($this->aauth->is_loggedin())
{
		

?>
<div id="wrapper">
<div class="container">
<a href="<?=base_url('isee/isee')?>"><img style="width: 110%"src="<?=base_url('assets/imgs/blog.jpg')?>"></a>
<h3><?=$this->title?></h3>
<div class="flexslider post-img">				
							
					<div class="flex-viewport">
<a href="<?=base_url('opinion')?>"><h5><span class="block-heading btn " style="padding:10px; color:red;"><span><-&nbsp;Return to Opinion</span></span></h5></a>
</div>
</div>
<br/>

<div class="post-entry">
	<div class="wpcf7" id="wpcf7-f853-p402-ol" lang="en-Us" dir="ltr">
	<div class="screen-reader-response"></div>
	<form class="wpcf7-form" novalidate="novalidate" action="<?=base_url('opinion/submit')?>" method="POST" enctype="multipart/form-data">
	<div style="display:none;"></div>

	<p><span class="wpcf7-form-control-wrap your-name">
	<input class="wpcf7-form-control wpcf7-text wpcf7-validate-as-required" type="text" name="title" placeHolder="Opinion Title " required aria-invalid="false" aria-required="true" size="80"></span>
</p>
	<p><span class="wpcf7-form-control-wrap your-email">
	<input class="wpcf7-form-control wpcf7-email wpcf7-validate-as-required" type="link" name="link" placeHolder="Opinion Link or website (optional)" aria-invalid="false" aria-required="true" size="80"></span>

	</p>
	<p>
	<span class="wpcf7-form-control-wrap form-group your-state">
	<select name="state" required class="wpcf7-form-control wpcf7-select wpcf7-state wpcf7-validate-as-state">
	<option value="NULL">-Select State-</option>
	<?php foreach($state as $key => $value ) {?>
	<option value="<?=$value['state_id']?>"> <?=$value['state_name']?></option>

	<?php } ?>
	</select>
	</span>
	</p>
	<p>
<h4>Message</h4>
	<span class="wpcf7-form-control your-message">
	<textarea class="wpcf7-form-control wpcf7-textarea wpcf7-validate-as-required"row="10" cols="60"  name="opinion" placeHolder="Type your Opinion here" required aria-invalid="false" aria-required="true" size="60"></span>
		</textarea>
	</span></p>
	<p>
	<h4>Your Picture <small>(130x 100)</small></h4>
	<span class="wpcf7-form-control your-file">
	<input class="wpcf7-form-control wpcf7-validate-as-required" name="image" type="file" required>
	</span>
	</p>
	<p>
	<input type="submit" name="submit" style="background-color:red" class="wpcf7-form-control wpcf7-submit wpcf7-validate-as-required" size="40" value="submit">

	
	</p>

	</form>
	</div>
</div>
</div>
</div>
<?php }else
{?>
<div class="" id="wrapper">
<div class="contianer">
<h2>You are Not Logged in </h2>
<hr/>

<br/>
</div>
</div>
<?php } ?>