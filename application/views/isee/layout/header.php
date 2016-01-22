
<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title><?=isset($this->title) ? $this->title."'s Blog" : "Isee Isay"?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Le styles -->
            <link href="<?= base_url('assets/camtales/css/bootstrap.css'); ?>" rel="stylesheet">
            <link href="<?= base_url('assets/camtales/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
            <link href="<?= base_url('assets/camtales/css/docs.css'); ?>" rel="stylesheet">
            <link href="<?= base_url('assets/camtales/js/google-code-prettify/prettify.css'); ?>" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url('assets/camtales/css/style.css'); ?>">

            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src="assets/js/html5shiv.js"></script>
            <![endif]-->

            <!-- Le fav and touch icons -->
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/camtales/ico/apple-touch-icon-144-precomposed.png'); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/camtales/ico/apple-touch-icon-114-precomposed.png'); ?>">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/camtales/ico/apple-touch-icon-72-precomposed.png'); ?>">
            <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/camtales/ico/apple-touch-icon-57-precomposed.png'); ?>">
            <!--<link rel="shortcut icon" href="<?= base_url('assets/camtales/ico/favicon.png'); ?>">-->

            <script type="text/javascript" src="<?php echo base_url('assets/camtales/js/tiny_mce/tiny_mce.js');?>"></script>




        </head>
        <?php
        ?>
        <body class="container " style="height: auto; background-image: url(<?=base_url('assets/imgs/back_2.png')?>) ">

            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">

                    <div class="container">
                        <a href="<?= base_url('isee'); ?>" class="brand ">NOWAYO</a>  

                          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class='nav-collapse collapse'>
                        <ul class="nav ">
                            <li class='active'><a href='<?=base_url('isee/isee')?>'>Presenters Concepts</a></li>
                            <li class='divider-vertical'></li>
                            <li><a href='#'>Gossips</a></li>
                            <li class='divider-vertical'></li>
                            <li><a href='<?=base_url('cam-tales')?>' target="_blank">Camtales</a></li>
                            <li class='divider-vertical'></li>
                            <li><a href='<?=base_url('')?>' target='_blank'>News</a></li>

                        </ul>

                        <ul class="nav pull-right">
                            <?php if ($this->aauth->is_loggedin()) { ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                        <?= !empty($this->aauth->get_user()->profile_picture) ?"<img style='height:20px; width:20px;'src='".base_url('uploads/'.$this->aauth->get_user()->profile_picture)."'>":"<i class='icon-user'></i>"?>&nbsp;<?= $this->aauth->get_user()->fullname; ?>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu fg-black" role="menu" aria-labelledby="dLabel">
                                        <li><a href="<?= base_url('isee/isee') ?>"><i class="icon-edit fg-hover-black"></i> My Account</a></li>
                                        <?php if($this->aauth->is_member('Administrator')){?>
                                        <li> <a href="<?= base_url('cp/dashboard')?>"><i class="icon-cog fg-hover-black"></i> Dashboard</a>
                                        <?php } ?>
                                        <li><a href="<?= base_url('index/logout'); ?>"><i class="icon-remove-sign"></i> Logout</a></li>

                                    </ul>
                                </li>
                            <?php } else { ?>
                               
                                    <li><a title="Click to Login" href="<?= base_url('#login'); ?>">
                                            <p><i class="icon-user fg-hover-black"></i>&nbsp;Not signed in</p></a></li>
                               
                            <?php } ?>
                        </ul>
                    </div>
                    </div>
                </div>

<?php $user_right = $this->aauth->is_member('Administrator');
$page = $this->uri->segment(2);
if($user_right AND $page ==="presenter"){ ?>
                <div class="navbar-inner container">
                <div class="container">
                <ul class="nav">
                <li><a href="#" class=""><i class="icon-lock"></i>&nbsp;You are viewing this page as an ADMIN</a></li>
                
                </ul>
                <ul class="nav pull-right">
                <li><a href="<?=base_url('cp/presenter_blog/'.$this->id)?>">Edit Blog</a></li>
                </ul>
                </div>
                </div>
                <?php } ?>
                




                </div>
                <div class="wrapper" style="background: white; margin-right:2%;padding-bottom:0%;  margin-left:2%;scroll: fixed">
<?php if($this->session->flashdata('msg') != ''){
        echo ' 
            <div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>';
    }
    if($this->session->flashdata('success') != ''){
        echo '
            <div class="alert alert-success">'.$this->session->flashdata('success').'</div>';

    } ?>