
<?php if ($this->aauth->is_loggedin()) { 
//    
//    $gender = $this->aauth->get_user()->gender_id;
//    $this->db()->r
    
    ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <?php $imageName = $this->aauth->get_user()->profile_picture;?>
                    <img  alt="" src="<?= isset($imageName) ? base_url('uploads/'.$imageName):  base_url('assets/camtales/img/picture5.png') ?>">
        </div>
        <div class="span7">
    <div class="hero-unit padding20">
        <h4><i class="icon-cog"></i>&nbsp;USERNAME ACCOUNT SETTING</h4>
        <hr/>
        <h1><?= $this->aauth->get_user()->fullname;?><small>'s Profile</small></h1>
        <hr/>
        <h4><strong><i class="icon-envelope"></i></strong> <?= $this->aauth->get_user()->email;?></h4>
        <h4><strong><i class="icon-tag"></i></strong>&nbsp; <?= $this->aauth->get_user()->phone;?></h4>
    </div>

   
    </div>
        <div class="span2"></div>
    <div class="row span6">
        <a href="<?=  base_url('cam-tales/account/edit_user')?>"><button class="btn btn-silver">+ Edit Profile</button></a>
    </div>

            </div>
            <div class="navbar-fixed-bottom navbar-static">
                <button class="btn btn-large"><i class="icon-question-sign"></i>&nbsp;Report Bug</button>
            </div>
                        </form>
                        
    </div>


<?php }else{
    header('location:'.base_url('#login'));
    
}
?>