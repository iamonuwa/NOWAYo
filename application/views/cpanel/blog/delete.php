<?php
/**
 * Created by PhpStorm.
 * User: BILL
 * Date: 12/11/2015
 * Time: 9:33 AM
 */
//$this->uri->segment(4)
$imag['url'] = $this->userutitlities->getImageById($delete['image_id']);

$ima['link'] = $imag['url']['link'];

?>

<div class="col-lg-12">

    <div class="container">

        <div class="row bg-danger" style="padding-top: 20px;padding-left: 30px; margin-bottom: 20px;">
        <h3 style="color: red" class=""><i class="icon-warning-sign"></i>&nbsp;<small>Are You Sure You want to Delete</small> <span style="text-decoration: underline;"><?=$delete['name']?> Blog</span></h3>
            </div>
        <div class="row">
        <div class="col-xs-12 col-fg-12 border-orange">
            <img style="width: 20%" src="<?=base_url('uploads/'.$ima['link'])?>" alt="">
        </div>
        <div class="col-xs-4 col-fg-4">
            <hr />
            <h3 style="color: black"><?=$delete['title']?>
            <br />
            <small><?=$delete['field']?></small>||
            <small><?=$delete['intro']?></small> </h3>


        </div>
        </div>
        <div class="btn-group">
            <a href="" class="btn  btn-default ">Cancel</a>
            <a href="<?=base_url('cp/presenter/confirm/delete/'.$delete['id'])?>" class="btn btn-large btn-danger">Delete</a>
        </div>


    </div>
</div>
