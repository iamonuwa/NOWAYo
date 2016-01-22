<?php 

// echo $this->pagination->create_links();

$catName['names'] = $this->state_model->get_state($stateId);
// var_dump($catName['names']);

?>

	<div class='wrapper' id="wrapper">
	<div class='container'>
	<div class="divider-block"></div>
	<div class="" id='content'>

	<h1><?=$this->title?> by State: <?=$catName['names'][0]['state_name']?> </h1>
	<hr/>
<h4><span style='color:gray'>Showing State Category</span> </h4>
<form action='<?=base_url('business/biz_listing/state')?>' method='post'>

<h4><h6>View by state&nbsp;
<select class="col-md-3 " name='state' id="state">
	<option>-select-</option>
	<?php  foreach ($state as $key => $value) { ?>
	<option value="<?=$value['state_id']?>"><?=$value['state_name']?></option>


<?php 	}?>

</select>
<input type="submit" name="stateButton" value="Search...">
</h6>
</h4>
</form>
<!-- <form action="<?php //base_url('business/biz_listing/category')?>" method="post">
<br/>
<h4 class="pull-right">
	<h6>Search by Category
	<select name="name_cate">
	<option>-select category</option>
	<?php //for($index2 = 0; $index2 < count($business); $index2++)
	{?>
		<option value="<?php // $business[$index2]['id']?>"><?php //$business[$index2]['name']?></option>
	<?php }?>
	</select><input type="submit" name="category" value="Search Category"</h6>
</h4>
</form> -->

<?php 
if(!empty($view[0]['name'])){
 for ($count = 0 ; $count < count($view); $count++){
 	$businessImage['info_img'] = $this->userutitlities->getImageById($view[$count]['image_id']);
// var_dump($view[$count]['name']);
 	$stateName['key'] = $this->state_model->get_state($view[$count]['state_id']);
 	$business_status = $view[$count]['status'];
 	if($business_status != NULL){

	?>

<div class="post list" style="padding:20px">	
	<div class="row">
	<p><?=$view[$count]['description']?></p>
	</div>
</div>
<!-- <div class="post list">	

				<div class="post-img">				
											
						<a class="item_overlay" href="#"><img  style="width:50%"  src="<?php // base_url('uploads/').'/'. $businessImage['info_img']['link'];?>" alt="18"></a>
											
				</div>
								
					
					<div class="post-entry">				
						
						<h2><a href="<?php //base_url('business/biz_listing/'.$view[$count]['business_category'].'/'. $view[$count]['name']);?>"> <?php echo $view[$count]['name']; ?> </a>	<br/>
						<small><?php //$view[$count]['description']?></small></h2>
						<h6>Location:&nbsp;<?php // $stateName['key'][0]['state_name']?>  &nbsp;|&nbsp;Address: <?php //$view[$count]['location']?> </h6>
						
													
					</div>					
					
				</div> -->

				<?php 
			}else{
				$msgErr ='<br/><h1>Oops!!! Sorry</h1> <br/>No Business in '.$this->uri->segment(3).' Category Please Check other Categories';

			}
				} 

				}else
 {
 	$msgErr ='<br/><h1>Oops!!! Sorry</h1> <br/>No Business in '.$this->uri->segment(3).' Category Please Check other Categories';

  } ?>
  <div class="row" style="color:red;">

 <h3><?=!empty($msgErr) ? $msgErr : '';?></h3>
 </div>

				</div>
				<div id='sidebar' class="sidebar">
				<div class="widget">
				<h4 class="block-heading"><span>Our Blogs</span></h4>
				<ul>

<?php 

	for($index = 0 ; $index < count($all); $index++){
// var_dump($business[$index]['name']);
	?>
	<li><a href="<?=base_url('isee/presenter/'.$all[$index]['presenter_id'])?>">
	<strong><?=$all[$index]['field']?><br/></strong>
	<h3><?=$all[$index]['title']?><br/>
	<span><small><?=$all[$index]['intro']?></small></span></h3></a>
	</li>

<?php  }

?>
<li><a href="<?=base_url('business/biz_listing/all')?>"> see all category</a></li>



				</ul>
				</div>
				</div>
				</div>
				</div>