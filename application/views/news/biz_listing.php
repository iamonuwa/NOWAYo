<div class="wrapper">
<div id="wrapper">
<div class="container">
<?php 

	if(!$this->aauth->is_member('Administrator'))
	{
		redirect(base_url(''));
	}
		

?>
<div id="wrapper">
<div class="container">

<h1><?=$this->title?></h1>
<small>Add Business to the business Listing</small>
<div class="flexslider post-img">				
							
					<div class="flex-viewport">
<a href="<?=base_url('cp/')?>"><h5><span class="block-heading btn " style="padding:0px; color:red;"><span><-&nbsp;Return to the Dashboard</span></span></h5></a>
</div>
</div>
<br/>

<div class="post-entry">
	<div class="wpcf7" id="wpcf7-f853-p402-ol" lang="en-Us" dir="ltr">
	<div class="screen-reader-response"></div>
	<form class="wpcf7-form" novalidate="novalidate" action="<?=base_url('cp/business_list/update')?>" method="POST" enctype="multipart/form-data">
	<div style="display:none;"></div>

	
	<p>
	<span class="wpcf7-form-control-wrap form-group your-state">
	<select style="padding:20px; width: 600px" name="ad_state" required class="wpcf7-form-control wpcf7-select wpcf7-state wpcf7-validate-as-state">
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
	<textarea style="height: 300px;"class="wpcf7-form-control wpcf7-textarea wpcf7-validate-as-required"row="10" cols="60"  name="descrip" placeHolder="Type your Opinion here" required aria-invalid="false" aria-required="true" size="60"></span>
		</textarea>
	</span></p>
	<p>
	<input type="submit" name="submit" style="background-color:red" class="wpcf7-form-control wpcf7-submit wpcf7-validate-as-required" size="40" value="submit">

	
	</p>

	</form>
	</div>
</div>
</div>
</div>

</div>
</div>
</div>