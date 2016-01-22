<?php 
// echo $this->pagination->create_links();

$catName['names'] = $this->userutitlities->ConvertMatch('nowayo_biz_cat', $this->uri->segment(3) )

?>

	<div class='wrapper' id="wrapper">
	<div class='container'>
	<div class="divider-block"></div>
	<div class="" id='content'>

	<h1><?=$this->title?></h1>

	<hr/>
<h4><span style='color:gray'>Showing <?php if(empty($this->uri->segment(3)) || $this->uri->segment(3) ==='all' || $this->uri->segment(3) ==='state'  )
 {echo 'All'; }elseif(isset($catName['names']['name'])){ echo $catName['names']['name'];}  
 elseif(!empty($cate_dis)){
$nameO = $this->userutitlities->ConvertMatch('nowayo_biz_cat', $cate_dis);
 	echo $nameO['name'];}
 ?> Category</span> </h4>
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

<?php 
if(!empty($view[0]['name'])){
 for ($count = 0 ; $count < count($view); $count++){
 	 	$businessImage['info_img'] = $this->userutitlities->getImageById($view[$count]['image_id']);
// var_dump($view[$count]['name']);
 	$stateName['key'] = $this->state_model->get_state($view[$count]['state_id']);
 	$business_status = $view[$count]['status'];
 	if($business_status != NULL){

	?>

<div class="post list" style="padding: 20px;">	
	<div class="row">
	<p><?=$view[$count]['description']?></p>
	</div>
</div>

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
				<h4 class="block-heading" style="padding:20px;">Other Category</h4>
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
<hr/>
</td>
</form>

</tr>

<?php  }

?>
<td></td>
<td><em><a href='<?=base_url('business/biz_listing/all')?>'>see all category</a></em></td>
</tr>
</tbody>
</table>




				</ul>
				</div>
				</div>
				</div>
				</div>