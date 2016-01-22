<?php 

?>
<div class="" id="wrapper">
	<div class="container">
	<div class="block-divider">
		<div class="content" id="content">
		<h1><i class="fa fa-home"></i>&nbsp;Showing Businesses in <?=$this->state?></h1>
		<hr/>
		<br/>
		<?php 

		foreach ($view as $key => $biz) {
			if($biz['status'] != NUll)
			{
// var_dump($key);
			?>

		<p> <?=$biz['description']?></p>


<?php } } ?>
                <br/>
                		<a href="<?=base_url('business/listing/state')?>" style="color: red"><h4><i class="fa fa-search-minus"></i>&nbsp;Return to Search Business</h4></a>


		</div>
		
		<div class="row">
                <div class="post list">
                    <div class="post-image">
                        <img src="<?=base_url('assets/imgs/blog_ad_1.jpg')?>" alt=""/>
                        <a href="<?=base_url('isee')?>"<h4 class="feature_text"><i class="fa fa-camera"></i>&nbsp;Click Here</h4></a>
                    </div>
                </div>
		</div>
		</div>
		</div>

	</div>
