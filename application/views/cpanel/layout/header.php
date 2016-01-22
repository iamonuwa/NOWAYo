<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo substr($this->title, 0, 30);?></title>

    <link href="<?php echo base_url('assets/cpanel/bower_components/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/bower_components/datatables-responsive/css/dataTables.responsive.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/css/essentials.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/magnific-popup/magnific-popup.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/dist/css/sb-admin-2.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/cpanel/bower_components/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url('assets/cpanel/modernizr.min.js');?>"></script>


    
    <script type="text/javascript" src="<?php echo base_url('assets/jscripts/tiny_mce/tiny_mce.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/cpanel/tiny_mce/tiny_mce_src.js');?>"></script>
<!-- Test Css -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php if($this->aauth->is_admin() && $this->aauth->is_loggedin()){?>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url('cp/');?>">WEBADMIN<?= !empty($this->title) ? "&nbsp;>>&nbsp;".substr($this->title, 0, 30) : '';?></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?= $this->aauth->get_user()->fullname;?>  <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('index/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url('cp');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Users Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url('cp/users');?>">View Users</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('cp/ban-user');?>">Banned Users</a>
                                </li>
                                <li>
                                    <a href="#">Roles Management <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url('cp/groups');?>">View Role</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('cp/create_group');?>">Create Role</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- <li> -->
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url('cp/news');?>">View All Posts</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('cp/create-post');?>">Create Posts</a>
                                </li>
                             </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Cam Tales Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url('cp/presenters');?>">Manage Presenters</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('cp/camera');?>">Manage Members Photos</a>
                                </li>
                             </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>&nbsp;Advertisement<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url('cp/uploadads');?>">Upload Advert</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('cp/manageads');?>">Manage Adverts</a>
                                </li>
                             </ul>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-wrench fa-fw'></i>&nbsp;Manage Businesses<span class='fa arrow'></span></a>
                            <ul class="nav nav-second-level">
                            <li>
                                <a href='<?= base_url('cp/business_list');?>'>Add Businesses</a>
                            </li>
                            <li>
                            <!-- <a href="<?php //base_url('cp/business_list/list_biz')?>">Businesses List</a> -->
                            </li>
                            <li>
                            <!-- <a href="<?php //base_url('cp/biz_category')?>">Biz Category</a> -->
                            </li>
                            </ul>


                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>&nbsp;Blogs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('cp/presenter_blog/create')?>">Create Blog</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('cp/presenter/blog/post/add')?>">Add Blog Post</a>
                                </li> 
                                <li>
                                    <a href="<?=base_url('cp/presenter_blog/')?>">View Blogs</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>&nbsp; Opinion Poll <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url('cp/opinion')?>">Request Management</a>
                                </li>
                            </ul>
                        </li>
                         </ul>
                </div>
            </div>

        </nav>


        <div id="page-wrapper">
            <div class="col-lg-12">
                <div class="row">
                    <br />
                    <br />
                </div>
            </div>
<!--            <div class="navbar navbar-fixed-top navbar-default">-->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $this->title;?></h1>
                </div>
            </div>
<!--            </div>-->

            

           

<?php } else{

}
     if($this->session->flashdata('msg') != ''){
        echo ' 
            <div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>';
    }
    if($this->session->flashdata('success') != ''){
        echo '
            <div class="alert alert-success">'.$this->session->flashdata('success').'</div>';

    } 
?>
