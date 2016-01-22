
<html>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>CAM TALEs</title>
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




        </head>
        <?php
        ?>
        <body class="container " style="height: auto;">

            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
                        <a href="<?= base_url('cam-tales'); ?>" class="brand ">NOWAYO</a>  
      
      <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="<?= $this->uri->segment(1) === '/' ? 'active' : '' ?>"><a href="<?= base_url('cam-tales/'); ?>">&nbsp;Home</a></li>
                            <?php if ($this->aauth->is_loggedin()) { ?>                
                                <li class=" divider-vertical"></li>
                                <li class="<?= $this->uri->segment(2) === 'uploads' ? 'active' : '' ?>"><a href="<?= base_url('cam-tales/uploads'); ?>">My Album</a></li>
                            <?php } ?>
                            <li class="divider-vertical"></li>
                            <!-- <li  class="<?php // $this->uri->segment(3) === 'presenters' || $this->uri->segment(3) === 'preview' ? 'active' : '' ?>"><a title="Presenters" href="<?php // base_url('cam-tales/presenters/presenters'); ?>">Presenters</a></li> -->
                            <!-- <li class="divider-vertical"></li> -->
                            <li class="<?= $this->uri->segment(3) === 'event' ? 'active' : '' ?>"><a title="Hottest Events" href="<?= base_url('cam-tales/presenters/event'); ?>">Events</a></li>
                            <li class="divider-vertical"></li>
                            <li class="<?= $this->uri->segment(3) === 'contest' ? 'active' : '' ?>"><a title="Image Contest"href="<?= base_url('cam-tales/presenters/contest'); ?>">Contests</a></li>
                        </ul>

                        <ul class="nav pull-right">
                            <?php if ($this->aauth->is_loggedin()) { ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                        <?= !empty($this->aauth->get_user()->profile_picture) ?"<img style='height:20px; width:20px;'src='".base_url('uploads/'.$this->aauth->get_user()->profile_picture)."'>":"<i class='icon-user'></i>"?>&nbsp;<?= $this->aauth->get_user()->fullname; ?>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu fg-black" role="menu" aria-labelledby="dLabel">
                                        <li><a href="<?= base_url('cam-tales/account/account') ?>"><i class="icon-edit fg-hover-black"></i> My Account</a></li>
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
            </div>
          