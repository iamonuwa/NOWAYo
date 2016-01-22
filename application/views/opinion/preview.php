<?php 



?>
<div class="" id="container">
	<div id="wrapper">
	<div class="container">
	<h1><?=$this->title?></h1>
	<div class="post single">
	<a href="<?=base_url('isee/isee')?>"><img style="width: 110%"src="<?=base_url('assets/imgs/blog.jpg')?>"></a>

		<div class="post-share">
			<ul class="">
				<li class="share-total "><a href="#">9</a></li>
				<li class="share-text">Shares</li>
				<li class="share-email"><a id="show-form" href="#"><i class="fa fa-envelope"></i>&nbsp;Email</a></li>
				<li class="share-email"><a id="show-form" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>

			</ul>
		</div>
		<div class="post-entry">
		<h4></h4>
		<h6><a style="color: red;hover:yello;" href="<?=base_url('opinion/create')?>">Click Here</a> to submit a an Opinion</h6>
<hr/>

<?php 
// {
// foreach($opinion as $key => $value){
	// var_dump($key);
		$image['url']  = $this->userutitlities->getImageById($opinion['image_id']);
		$useriD['detail'] =$this->userutitlities->getUserDetails($opinion['user_id'], NULL);
		if(!empty($opinion['state_id']))
		{
		$stateName['state'] = $this->state_model->get_state($opinion['state_id']);
		$stateName['state'] = $stateName['state']['state_name'];
	}else{
		$stateName['state'] = " ";
	}

	?>

								
					<div class="post-image">
					<img width="200" src="<?=!empty($image['url']['link']) ? base_url('uploads/'.$image['url']['link']) : base_url('assests/camtales/img/picture5.png') ?>">
					</div>
					<div class="post-entry">				
						
						<h2><a href="<?php echo base_url('opinion/view/'. $opinion['id'])?>"> <?php echo $opinion['title']; ?> </a>	<br/>				
						<small><?php $opinion['link']?></small></h2>

						<h6>Author:&nbsp;<?php echo $useriD['detail']['fullname']?>  &nbsp;|&nbsp;Posted: <?php echo date('d-m-Y h:i A', $opinion['date_created'])?> </h6>
						<small><?=$stateName['state']?></small>

						<p>
						<?=$opinion['content']?>
						</p>
						<a style="color:red" href="<?=base_url('opinion')?>"><h5>Clik here to return to opinion page</h5></a>
													
					</div>		



 <?php  //} ?>


	</div>
	</div>
	</div>
</div>
</div>