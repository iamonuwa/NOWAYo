<!DOCTYPE html>
<html lang="en-US">

<head>

	<meta charset="UTF-8">	


	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">	

	<link rel="stylesheet" type="text/javascript" href="<?= base_url('style.css')?>"/>
	
	<link rel="shortcut icon" href="<?php echo base_url('assets/path/images/fav.ico');?>">		
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/font-awesome.min.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/owl.carousel.min.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/flexslider.min.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/lightbox.min.css');?>" type="text/css" media="all">	
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/fonts.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/animate.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/style.css');?>" type="text/css" media="all">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/path/css/responsive.css');?>" type="text/css" media="all">
	
	<title><?php echo isset($this->title) ? $this->title : "Nowayo" ;?></title>	
	
	<link rel="stylesheet" href="<?php echo base_url('assets/3dgallery/css/style.css');?>" type="text/css" media="all">

	<script type="text/javascript" src="<?php echo base_url('assets/3dgallery/js/modernizr.custom.53451.js');?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/jscripts/tiny_mce/tiny_mce.js');?>"></script>

	
</head>

<div id="header-sticky" class="header-sticky">
	
		<div class="navigation">
			
			<div class="container">
			
				<div class="logo_sticky">
				
					<div class="logo">
										
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/path/images/no_log.png');?>" alt="Nowayo"></a>
																		
					</div>	
					
					<div class="mobile-menu">
					
						<a class="menu-icon" href="#"><i class="fa fa-reorder"></i></a>
						
					</div>
				</div>
				<div class="menu-sticky-container">
				
					<ul class="menu" id="menu-sticky">
					<li class="item-login"></li>
					<li class="menu-item">ADMIN DASHBOARD</li>
					</ul>
					
				</div>	
										
				<div class="search_block">
				
					<form class="search_header_form" method="post" action="">

						<input class="search_input" type="text" placeholder="Type here to search..." size="20" name="s">

					</form>
				
				</div>
				
				<div class="links_block">
					
					<div class="links_list">						
						
						<div class="blcok">
			
							<a class="search_header" href="javascript:void(0)">

								<i class="fa fa-search"></i>

							</a>
						
						</div>
						<div class="blcok">
						 <?php  if (!$this->aauth->is_loggedin()){ ?>	
							<a class="dropdown-login" href="#"><i class="fa fa-user"></i></a>
							
							<div class="dropdown-menu-login">
						
								<a href="#" class="login btn btn-medium btn-red"><i class="fa fa-key"></i>LOGIN</a><br/>
								
								<a href="#" class="register btn btn-medium btn-red"><i class="fa fa-user"></i>BECOME A MEMBER</a>
									
							</div>
						<?php }else{ ?>

						  <div class="path-login">
							
								<div class="path-login-welcome">
								
									Welcome <a class="usernmae" href="#"><?php echo $this->session->userdata('name');?></a> <span><i class="fa fa-caret-down"></i></span>
								
								</div>
								
								<div class="path-login-form" style="display: none;">
								
									<div class="author-img">									
										
										<h4><?php echo $this->session->userdata('name');?></h4>
										
									</div>							
									
									
									<div class="path-login-profile">
							
										

										<?php /*if($this->aauth->is_member('Moderator')|| $this->aauth->is_member('Administrator')){?>
										<a href="<?php echo base_url('news/create/');?>">Create News Content</a>

										<a href="<?php echo base_url('news/posts/'.$this->session->userdata('id'));?>">My News Posts</a>

										<?php }*/ ?>
										<?php if($this->aauth->is_member('Default')){?>
										
										<a href="<?php echo base_url('cam-tales/create/');?>">Upload Photo to CamTales</a>

										<a href="<?php echo base_url('cam/views/'.$this->session->userdata('id'));?>">My Cam Tales Album</a>

										<a href="#">Upload Content to Isee-Isay</a>
										<?php }

										else {?>
										<a href="<?php echo base_url('cp/dashboard');?>">Enter Control Panel</a>
										<?php }?>
										<a href="<?php echo base_url('index/logout');?>" class="btn btn-medium btn-black">Logout</a>
									
									</div>
								
								</div>								
							</div> 
							<?php }?>

						</div>                           
											
					</div>		
				</div>
			</div>
		</div>
	</div>
       <div id="header">
	
		<div id="topbar">
			
			<div class="container">
			
				<div id="logo">
					
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/path/images/no_log.png');?>" alt="Nowayo"></a>
															
				</div>
				<div class="description">
				
					<span><i>Home Of Honesty!</i></span>
					
				</div>		
				<div class="path-login">

					<ul class="path-login-social">
					
						<?php  if ($this->aauth->is_loggedin()){ ?>	
						
                                                 

                                                 <div class="path-login">
							
								<div class="path-login-welcome">
								
									Welcome <a class="usernmae" href="#"><?php echo $this->session->userdata('fullname');?></a> <span><i class="fa fa-caret-down"></i></span>
								
								</div>
								
								<div class="path-login-form" style="display: none;">
								
									<div class="author-img">
										<h4><?php echo $this->session->userdata('name');?></h4>
										
									</div>							
									
									
									<div class="path-login-profile">
							
										<?php }/*if($this->aauth->is_member('Moderator')|| $this->aauth->is_member('Administrator')){?>
										<a href="<?php echo base_url('news/create/');?>">Create News Content</a>

										<a href="<?php echo base_url('news/posts/'.$this->session->userdata('id'));?>">My News Posts</a>

										<?php }*/ ?>
										
					
					</ul>
				</div>
			</div>
		</div>
		
		<div class="navigation">
			
			<div class="container">
			
				<div class="logo_mobile">
				
					<div class="logo">
					
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/path/images/no_log.png');?>" alt="Path"></a>
																	
					</div>
					<div class="mobile-menu">
					
						<a class="menu-icon" href="#"><i class="fa fa-reorder"></i></a>
						
					</div>
				</div>
			
				<div class="menu-primary-container">
				
					<ul id="menu-primary" class="menu">
					



                            
                                             
						<li class="item-search">				
						
							<div>
							
								<form class="search_form" method="post" action="">
								
									<input class="item-search-input" type="text" placeholder="SEARCH" size="10" name="s">
									
								</form>
								
							</div>
							
						</li>
						
						<li class="item-social">

						<a class="btn btn-social" target="_blank" href="https://www.facebook.com/pages/Nowayo/891857614213116"><i class="fa fa-facebook round-icon"></i></a>
							
							<a class="btn btn-social" target="_blank" href="https://www.twitter.com/nowayo_com"><i class="fa fa-twitter"></i></a>
							
							<a class="btn btn-social" target="_blank" href="https://www.instagram.com/nowayo"><i class="fa fa-instagram"></i></a>
						</li>
						
					</ul>
				</div>
						
				<form id="searchform" method="post" action="">
	
					<input type="text" name="s" id="s" placeholder="SEARCH">
					
					<i class="fa fa-search"></i>
					
				</form>
				
				<div class="search_block">
				
					<form class="search_header_form" method="post" action="">

						<input class="search_input" type="text" placeholder="Type here to search..." size="20" name="s">

					</form>
				</div>
				
				<div class="links_block">
					
					<div class="links_list">
						
						<div class="blcok">
				
							<a class="search_header" href="javascript:void(0)">

								<i class="fa fa-search"></i>

							</a>
						
						</div>

					</div>		
				</div>
			</div>
		</div>
	</div>
        
<div id="wrapper">	
	
		<div class="container">	
                      <?php 
  
     if($this->session->flashdata('msg') != ''){
		echo '
		<div class="grid grid-1"> 
        	<div class="alert alert-red">'.$this->session->flashdata('msg').'</div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>';
	}
	if($this->session->flashdata('success') != ''){
		echo '
		<div class="grid grid-1">
        	<div class="alert alert-green">'.$this->session->flashdata('success').'</div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>';

	} 
	
        ?>



<?php 
  //      $this->load->helper('url');
//echo php_strip_whitespace($this->uri->segment(4));

/*
        <?=$this->session->flashdata('message');?>
        <?= $this->ion_auth->messages(); ?>
		<?= $this->ion_auth->errors(); ?>
		
		*/?>