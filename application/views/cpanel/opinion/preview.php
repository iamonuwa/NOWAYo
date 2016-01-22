<?php 
$author['user'] = $this->userutitlities->getUserDetails($opinion['user_id'], NuLL);
$image['url']  = $this->userutitlities->getImageById($opinion['image_id']);
if(!empty($opinion['state_id']))
{
$author['state'] = $this->state_model->get_state($opinion['state_id']);
$state_name = $author['state']['state_name'];
}else
{
	$state_name = "no state";

}


?>

    <script src="<?=base_url('assets/tinymce/tinymce.min')?>"></script>
<script>tinymce.init({selector:'textarea'});</script>
<div class="row">
                <div class="col-lg-12">
  
                <h5>NB: Clik on <?= empty($opinion['reviewed']) ? 'Publish': 'Disconnect'?> to set the opinion <?= empty($opinion['reviewed']) ? 'LIVE': 'OFF'?> display on the front end (i.e Users View) </h5>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <img src="<?=base_url('uploads/'.$image['url']['link'])?>" width="200"><br/>
                        <h3 style="color: black">Author : <?=$author['user']['fullname']?><br/>
                        <a href="#"><small>State: <?= $state_name ?></small></h3></a>

                        <div class="btn-group">
                        <a href="<?=base_url('cp/opinion')?>" class="btn btn-default">Return to Opinion Requests</a>
                        <a href="<?=base_url('cp/opinion/Publish/'.$opinion['id'])?>" class="btn btn-default" value="<?=$opinion['id']?>"><?= empty($opinion['reviewed']) ? 'Publish': 'Disconnect'?></a>
                        <a class="btn btn-default" href="<?=base_url('cp/opinion/edit/'.$opinion['id'])?>">Edit</a>
                        <br/>
                        </div>
                        <div class="container">
                        <h4>Opinion Content</h4>
                        <?php if ($this->uri->segment(3) ==="edit") {?>
                                  <p>
                                  <small style="color: red">Enter Changes and Click Save</small>
                                  <form action="<?=base_url('cp/opinion/edit/save/'.$opinion['id'])?>" method="POST">
                      <!-- <textarea id="wysiwyg" name="comment" cols="45" rows="8" aria-required="true" placeholder="Message"></textarea></p>    -->
            <textarea id="wysiwyg" autofocused="" class="summernote form-control col-md-3" name="content" data-height="200" ><?= $opinion['content']?></textarea></p>

            <div class="btn-group">
	            <input name="save" value="Save" type="submit" class="btn btn-default"/>
            </div>
            </form>
                        <?php }else{ ?>
                        <p><?=$opinion['content']?></p>
                        <?php } ?>
                        <hr/>
                        </div>

                        </div>
                    </div>
	            </div>
</div>
