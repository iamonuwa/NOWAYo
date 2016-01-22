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
		<h4>Headlines Opinion Box</h4>
		<h6><a style="color: red;hover:yello;" href="<?=base_url('opinion/create')?>">Click Here</a> to submit a an Opinion</h6>
<hr/>
<?php foreach($opinion as $key => $value){
	if($value['reviewed'] != NULL)
	{
	// var_dump($key);
		$image['url']  = $this->userutitlities->getImageById($value['image_id']);
		$useriD['detail'] =$this->userutitlities->getUserDetails($value['user_id'], NULL)

	?>

								
					
					<div class="post-entry">				
						
						<h2><a href="<?php echo base_url('opinion/view/'. $value['id'])?>"> <?php echo $value['title']; ?> </a>	<br/>				
						<small><?php $value['link']?></small></h2>

						<h6>Author:&nbsp;<?php echo $useriD['detail']['fullname']?>  &nbsp;|&nbsp;Posted: <?php echo date('d-m-Y h:i A', $value['date_created'])?> </h6>
													
					</div>		



<?php }else{
	$error = "<div class=''><br/>No Opinion in the Poll Yet.</div> ";
	} }?>

<h4><?= isset($error) ? $error : ''?></h4>
		</div>

	</div>
	</div>
	</div>
</div>