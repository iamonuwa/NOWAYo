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
<form action="<?=base_url('business/biz_listing/category')?>" method="post">
<br/>
<h4 class="pull-right">
	<h6>Search by Category
	<select name="name_cate">
	<option>-select category</option>
	<?php for($index2 = 0; $index2 < count($business); $index2++)
	{?>
		<option value="<?=$business[$index2]['id']?>"><?=$business[$index2]['name']?></option>
	<?php }?>
	</select><input type="submit" name="category" value="Search Category"</h6>
</h4>
</form>

<?php 
if(!empty($view[0]['name'])){
 for ($count = 0 ; $count < count($view); $count++){
// var_dump($view[$count]['name']);
 	$stateName['key'] = $this->state_model->get_state($view[$count]['state_id']);
 	$business_status = $view[$count]['status'];
 	if($business_status != NULL){

	?>
<div class="post list">	
	<div class="row">
	<p><?=$view[$count]['description']?></p>
	</div>
</div>
<!-- 
<div class="post list">	

				<div class="post-img">				
											
						<a class="item_overlay" href="#"><img width="268" height="175" src="<?php// base_url('uploads/').'/'. $view[$count]['image_id'];?>" alt="18"></a>
											
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
				<h4 class="block-heading" style="padding:20p;">Other Category</h4>
				<ul>
				<table>
<tbody>
<tr>
<th class="views"><em>Other Category</em></th>
<th></th>
</tr>
<?php 

	for($index = 0 ; $index < count($business); $index++){
// var_dump($business[$index]['name']);
	


	?>

<tr class="odd">
<form action='<?=base_url('business/business')?>' method='post'>
<td><h1><a href='<?=base_url('business/biz_listing/'.$business[$index]['id'])?>'><?=$business[$index]['name']?></h1>
<input hidden name='id' value='<?=$business[$index]['id']?>'/>
</td>
</form>

</tr>

<?php  }

?>
<td>
<td><em><a href='<?=base_url('business/biz_listing/all')?>'>see all category</a></em></td>
</tr>
</tbody>
</table>




				</ul>
				</div>
				</div>
				</div>
				</div>