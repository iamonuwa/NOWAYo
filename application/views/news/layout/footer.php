</div>

<div id="footer" >
			
			<div class="footer-top">
			
				<div class="container">
			
					<div class="footer-col">
					
						<div class="footer-logo">
										
							<h2><a href="<?php echo base_url();?>">NoWayo</a></h2>	
														
							<p>Home of Honesty</p>				
						</div>				
											
						<div class="footer-social">
							
							<h4>Follow Us</h4>
							<span class="social-item"><a target="_blank" href="https://www.facebook.com/pages/Nowayo/891857614213116" title="Like Us on Facebook"><i class="fa fa-facebook round-icon"></i></a></span>	
							
							<span class="social-item"><a target="_blank" href="https://www.twitter.com/nowayo_com" title="Follow Us on Twitter"><i class="fa fa-twitter round-icon"></i></a></span>		
								
							<span class="social-item"><a target="_blank" href="https://www.instagram.com/nowayo" title="Follow Us on Instagram"><i class="fa fa-instagram round-icon"></i></a></span> 
													
						</div>
									
						<p class="mail"><a href="mailto:newsroom@nowayo.com">newsroom@nowayo.com</a></p>
					
					</div>

					<div class="footer-col">
						
						<div class="footer-widget">
													
						</div>
					</div>
					<div class="footer-right">
						
						<div class="footer-widget">
						<h4 class="block-heading"><span>Main</span></h4>
						
							<div class="menu-primary-container">
							
								<ul id="menu-primary-1" class="menu">
								
									<li><a href="<?php echo base_url();?>">Home</a></li>
									
									<li><a href="<?php echo base_url('news/');?>">Latest News</a></li>
									
								</ul>
							</div>
						
							</div>
					</div>	
					</div>					
					
					<div class="footer-right">
					
						<div class="footer-widget">
						
						<h4 class="block-heading"><span>About Us</span></h4>		
						
							<ul>
								<li><a href="<?php echo base_url('about');?>">About Us</a></li>
								
								<li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>
								
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="footer-bottom">
			
				<div class="container">
					
					<span class="copyright">© 2015. NoWayo.</span>
					
				</div>
			</div>
	<?php  if (!$this->aauth->is_loggedin()){ ?>	

	<?php echo form_open('index/login', array(
		'id'=>'login',
		'auto-complete'=>'off',
		'accept-charset'=>'utf-8',
		'method'=>'POST'
		));?>
		<h1>LOG IN</h1>

        <p class="status"></p>

        <?php echo form_input('email', '', $attributes = array(
        	'placeholder' =>'Email Address',
        	'id'=>'login_username',
        	));?>

         <?php echo form_password('password', '', $attributes = array(
        	'placeholder' => 'Password',
        	'id'=>'login_password',
        	));?>

        	<?php echo form_submit('submit', 'Login');?>

        	<div>

        	<?php echo anchor('#', 'Lost your password?', array(
        		'class'=>'lost'
        		));?>
                                                              
			<a class="close" href="#"><i class="fa fa-times"></i></a>
			
			</div>

		<?php echo form_close();?>


		<?php echo form_open('index/register', array(
		'id'=>'register',
		'auto-complete'=>'off',
		'accept-charset'=>'utf-8',
		'method'=>'POST'
		));?>

		<h1>SIGN UP</h1>
			
			<p class="status"></p>

			<?php echo form_input('full_name', '', $attributes = array(
				'id'=>'user_input',
				'placeholder'=>'Full Name'
				));?>
			<?php echo form_input('user_name', '', $attributes = array(
				'id'=>'user_input',
				'placeholder'=>'Username'
				));?>
			<?php echo form_input('email', '', $attributes = array(
				'id'=>'register_email',
				'placeholder'=>'Email Address'
				));?>
			<?php echo form_password('password', '', $attributes = array(
				'id'=>'register_password',
				'placeholder'=>'Password'
				));?>
			<?php echo form_password('password_confirm', '', $attributes = array(
				'id'=>'user_input',
				'placeholder'=>'Confirm Password'
				));?>
				<?php echo form_input('phone', '', $attributes = array(
				'id'=>'user_input',
				'placeholder'=>'Phone Number'
				));?>
			<?php echo form_label('Gender', 'gender');?>
			 <select name="gender">
					<?php foreach ($gender as $key => $value) {
				echo '<option value="'.$value['gender_id'].'">'.$value['gender_name'].'</option>';
 			}?>
			</select>
			<div>
			 <?php echo form_label('State Of Residence', 'residence');?>

			<select name="residence">
					<?php foreach ($state as $key => $value) {
				echo '<option value="'.$value['state_id'].'">'.$value['state_name'].'</option>';
 			}?>
			</select>
			</div>
			<?php echo form_submit('submit', 'Sign Up');?>

			<div>
                                                              
			<a class="close" href="#"><i class="fa fa-times"></i></a>
			
			</div>


		<?php echo form_close();?>

	
		<?php echo form_open('index/forgot', array(
		'id'=>'forgot',
		'auto-complete'=>'off',
		'accept-charset'=>'utf-8',
		'method'=>'POST'
		));?>

		<h1>LOST PASSWORD</h1>
			
			<p class="status"></p>
		<?php echo form_input('email', '', $attributes = array(
				'id'=>'register_email',
				'placeholder'=>'Email Address'
				));?>

		<?php echo form_submit('submit', 'Get New Password');?>

        	<div>
                                                              
			<a class="close" href="#"><i class="fa fa-times"></i></a>
			
			</div>
			<?php echo form_close();?>
		
	<?php }else {} ?>
	
	
		<div class="gotop"><a href="#"><i class="fa fa-angle-up"></i></a></div>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/jquery-1.11.2.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/owl.carousel.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/flexslider.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/lightbox-2.6.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/waypoints.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/custom.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/jquery.fileupload.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/path/js/jquery.fileupload-image.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/3dgallery/js/jquery.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/3dgallery/js/jquery.gallery.js');?>"></script>
	

	<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery({
					autoplay	:	true
				});
			});
		</script/>
	</body>

</html>

