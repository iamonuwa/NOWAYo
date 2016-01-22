
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		content_css : "css/content.css",

		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});


(function($) {
	"use strict";
						
	/* Tabs 
	------------------------------------------------------------------------------*/
	jQuery('.tabs').each(function(){
		var $tabs = jQuery(this);
		// init the tabs
		$tabs.find('.tabs-nav a:eq(0)').addClass('active');
		$tabs.find('.tab').hide().eq(0).show();

		// actions
		$tabs.find('.tabs-nav a').on('click', function(){
			var $self = jQuery(this),
			idx = $self.index();

			$self.addClass('active').siblings('.active').removeClass('active');
			$tabs.find('.tab').hide().eq( idx ).fadeIn();

			return false;
			
		});
	});
	
	
	/* Page Tabs 
	------------------------------------------------------------------------------*/
	jQuery('.page-tabs').each(function(){
		var $tabs = jQuery(this);
		// init the tabs
		$tabs.find('.page-tabs-nav a:eq(0)').addClass('active');
		$tabs.find('.tab').hide().eq(0).show();

		// actions
		$tabs.find('.page-tabs-nav a').on('click', function(){
			var $self = jQuery(this),
			idx = $self.index();

			$self.addClass('active').siblings('.active').removeClass('active');
			$tabs.find('.tab').hide().eq( idx ).fadeIn();

			return false;
			
		});
	});
	
	
	/*  DropDown Follow Us
	------------------------------------------------------------------------------*/
	jQuery('.dropdown-social').on('click', function(event){
		jQuery(this).next('.dropdown-menu-social').fadeToggle('normal');
		jQuery('.dropdown-menu-login').fadeOut('normal');
		jQuery(this).toggleClass('active');			
								
		return false;
	});
	
	jQuery(document).on('click', function (e) {
		e.stopPropagation();
		var container = jQuery('.dropdown-menu-social');

		if (container.has(e.target).length === 0) {
			jQuery('.dropdown-menu-social').fadeOut('normal');
			jQuery('.path-login .dropdown-social, .social-left .dropdown-social').removeClass('active');
		}
	});
	
	
	/*  DropDown Login
	------------------------------------------------------------------------------*/
	jQuery('.dropdown-login').on('click', function(event){
		jQuery(this).next('.dropdown-menu-login').fadeToggle('normal');
		jQuery(this).parent().prev('.blcok').prev('.blcok').children('.dropdown-menu-social').fadeOut('normal');
		jQuery(this).toggleClass('active');			
								
		return false;
	});
	
	jQuery(document).on('click', function (e) {
		e.stopPropagation();
		var container = jQuery('.dropdown-menu-login');

		if (container.has(e.target).length === 0) {
			jQuery('.dropdown-menu-login').fadeOut('normal');
		}
	});	
		
	
	/*  DropDown Profile Panel
	------------------------------------------------------------------------------*/
	jQuery('.usernmae').on('click', function(){
			jQuery(this).parent().next('.path-login-form').fadeToggle('normal');;
						
		return false;
	});
	
	jQuery(document).on('click', function (e) {
		e.stopPropagation();
		var container = jQuery(".path-login-form");

		if (container.has(e.target).length === 0) {
			jQuery('.path-login-form').fadeOut('normal');
		}
	});
	
	
	/* Accordion 
	------------------------------------------------------------------------------*/
	jQuery('.accordion header').on('click', function(e){
		var $li = jQuery(this).closest('li');
		$li
			.toggleClass('exp').find('.acc-cnt').slideToggle().end()
			.siblings('.exp').removeClass('exp').find('.acc-cnt').slideUp();

		return false;
	});
	
	
	/*  Flex Slider
	------------------------------------------------------------------------------*/
	jQuery('.flexslider').flexslider({
		animation: "slide",
	});
	
	
	/*  Some Cat Videos
	------------------------------------------------------------------------------*/
	jQuery('.owl-carousel').owlCarousel({
		
		loop:true,
		margin: 10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			480:{
				items:3,
				nav:true
			},
			767:{
				items:4,
				nav:true,
				loop:false
			}
		}
	
	});
		
	
	/* Search Button
	------------------------------------------------------------------------------*/
	jQuery('.search_header').on('click',function(e){  
	
		var leftPos = jQuery(this).parents('.container').eq(0).find('ul.menu').children('li.menu-item:first').position().left;
		var searchWidth = jQuery(this).parents('.container').eq(0).find('ul.menu').parent().innerWidth();
			
		if(jQuery(this).parents('.links_block').prev('.search_block').is(':visible')){
		  
			jQuery(this).parents('.links_block').prev('.search_block').hide();
			jQuery(this).parents('.links_block').prev('.search_block').css({'z-index':'0', 'left':'10', 'width':'0'});
			
		} else {
			
			jQuery(this).parents('.links_block').prev('.search_block').css({'z-index':'100', 'left':leftPos, 'width':searchWidth});
			jQuery(this).parents('.links_block').prev('.search_block').show();					
							
		}
			
			jQuery(this).children('i').toggleClass('fa-times','fa-search');	
								
	});
	
	jQuery('.item-search-input').focus(function() {
		jQuery("ul li.item-search  div").css({"width":"200px"});
		jQuery(this).css({"width":"200px", "outline":"1px solid #323232"});
	}).blur(function() {
		jQuery("ul li.item-search  div").css({"width":"100px"});
		jQuery(this).css({"width":"100px", "outline":"none"});
	});
	
	
	/* Mobile navigation
	------------------------------------------------------------------------------*/
	jQuery(".menu-icon").on("click", function(){
		jQuery(this).parents('.container').eq(0).find('ul.menu').slideToggle("fast");
		jQuery(this).toggleClass("active");
	});
	
	jQuery("li.menu-item-has-children > a").on("click", function(){
		if (jQuery(window).width() <= 767) {
			jQuery(this).parents("li").children(".sub-menu:first").slideToggle();
			jQuery(this).parents("li:first").toggleClass("current-menu-item");				
		 }
		 return false;
	});
	
	
	/* Mega Menu
	------------------------------------------------------------------------------*/
	var megaMenu = function(winWidth) {
	if ( jQuery('.mega-menu').size() != 0 ) {
		
		var item = jQuery('.mega-menu');
		var megaMenuLeft = item.offset().left;
		
		if (jQuery(window).width() >= 760) {					
			item.children('.sub-menu').css({
				'width' : jQuery(window).width(),
				'margin-left' : - megaMenuLeft
				});
			}
			else
			{			
				item.children('.sub-menu').css({
				'width' : '100%',
				'margin-left' : '0'
				});	
				
			}
		}	
    };
	
	
	
	jQuery(window).load(function() {
		
	/* Mega Menu on Window Load
	------------------------------------------------------------------------------*/	
	megaMenu(jQuery(window).width());	
		
	
		
	/* Preloader
	------------------------------------------------------------------------------*/
	jQuery(".status").fadeOut();
	jQuery(".preloader").delay(1000).fadeOut("slow");
	
	});	
	
	
	/* Mega Menu on Window Resize
	------------------------------------------------------------------------------*/	
	jQuery(window).resize(function() {
		megaMenu(jQuery(window).width());		
	});
	
	
	jQuery(window).scroll(function() {            
	
	
	/* Go top button
	------------------------------------------------------------------------------*/
	var currentScroll = jQuery(window).scrollTop();
		if (currentScroll >= 300) { 
			jQuery('.gotop').css({
				display: 'block'
			});
		} else {                       
			jQuery('.gotop').css({
				display: 'none'						
			});
		}
	
	
	/* Sticky header
	------------------------------------------------------------------------------*/	
		var windowpos = jQuery(window).scrollTop();
				
		if (windowpos >= 200) {
			jQuery('#header-sticky').addClass("sticky-header");
			jQuery('.logo_sticky').show("linear");
		} else {
			jQuery('#header-sticky').removeClass("sticky-header");
			jQuery('.logo_sticky').hide(500);
			jQuery('#header-sticky .path-login-form').fadeOut('fast');
			jQuery('#header-sticky .dropdown-menu-social').fadeOut('fast');
			jQuery('#header-sticky .dropdown-menu-login').fadeOut('fast');
		}	
		
		
	/* Post navigation
	------------------------------------------------------------------------------*/	
		var win = jQuery(window);
		var postEntryPos = jQuery('.single .post-entry');
		
		if (postEntryPos.length) {
			
			var y = (postEntryPos.offset().top + postEntryPos.height())-500;
							
			if (win.scrollTop() >= y) {
				jQuery('.post-nav').fadeIn();
			} else {
				jQuery('.post-nav').fadeOut();
			}
		
		}
			
	});
	
	
	/* Go top button click
	------------------------------------------------------------------------------*/
	jQuery('.gotop').on('click', function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});	
	
	
	/*  Featured area hover
	-----------------------------------------------------------------------------------*/  
	jQuery('.featured_hover_effect').on({
	  mouseenter: function() {
		var featured_title = jQuery(this).find('.featured-text').outerHeight();
		var featured_text = jQuery(this).find('.featured-text p').height();
		jQuery(this).find('.featured-text p').animate({
			opacity: 1
		}, 100);
		jQuery(this).find('.featured-text').animate({
			bottom: featured_text + 20
		}, 100);
	}, mouseleave: function() {
		
		var featured_title_2 = jQuery(this).find('.featured-text').height();
		var featured_text_2 = jQuery(this).find('.featured-text p').height();
		jQuery(this).find('.featured-text').animate({
			bottom:0
		}, 100);
		jQuery(this).find('.featured-text p').animate({
			opacity: 0
		}, 100);
		}
	});
	
		
	
	/*  UI Shortcode Dropdown 
	-----------------------------------------------------------------------------------*/ 
	function DropDown(el) {
		this.dd = el;
		this.placeholder = this.dd.children('span');
		this.opts = this.dd.find('ul.short-dropdown > li');
		this.val = '';
		this.index = -1;
		this.initEvents();
	}
	DropDown.prototype = {
		initEvents : function() {
			var obj = this;
	 
			obj.dd.on('click', function(event){
				jQuery(this).toggleClass('active');
				return false;
			});
	 
			obj.opts.on('click',function(){
				var opt = jQuery(this);
				obj.val = opt.text();
				obj.index = opt.index();
				obj.placeholder.text(obj.val);
			});
		},
		getValue : function() {
			return this.val;
		},
		getIndex : function() {
			return this.index;
		}
	}
	
	jQuery(function() {
	 
		var dd = new DropDown( jQuery('#dd') );
	 
		jQuery(document).on('click', function() {
			jQuery('.short-select').removeClass('active');
		});
	 
	});
	
	
	/*  Email Post using Jquery Ajax
	------------------------------------------------------------------------------*/
	jQuery("#show-form").on('click', function(e){
		jQuery(".email-to-friend").fadeIn("slow")
		.css('top', e.pageY + -20)
		.css('left', e.pageX + 105)
		.appendTo('body');
		
		return false;
	});	
	
	jQuery(document).on('click', function (e) {
		e.stopPropagation();
		var container = jQuery(".email-to-friend");

		if (container.has(e.target).length === 0) {
			jQuery(".email-to-friend").fadeOut("slow");
		}
	});
	
	jQuery("#hide-form").on('click', function(){
		jQuery(".email-to-friend").fadeOut("slow");
	});
	
		
	
	/*  Login Ajax Popup 
	-----------------------------------------------------------------------------------*/ 
	jQuery('a.login').on('click', function(e){
        jQuery('body').prepend('<div class="popupoverlay"></div>');
        jQuery('form#login').fadeIn(500);
		jQuery('form#login p.status').hide();
		jQuery('#login_username').focus();
        jQuery('div.popupoverlay, form#login a.close').on('click', function(){
            jQuery('div.popupoverlay').remove();
            jQuery('form#login').hide();
			return false;
        });
        e.preventDefault();
    });
    
	 jQuery('form#login').on('submit', function(e){
		jQuery('#login_username').focus();
        //e.preventDefault();
    });
   	
	
	/*  Register Ajax Popup 
	-----------------------------------------------------------------------------------*/ 
	jQuery('a.register').on('click', function(e){
        jQuery('body').prepend('<div class="popupoverlay"></div>');
        jQuery('form#register').fadeIn(500);
		jQuery('form#register p.status').hide(); 
		jQuery('#register_username').focus();
        jQuery('div.popupoverlay, form#register a.close').on('click', function(){
            jQuery('div.popupoverlay').remove();
            jQuery('form#register').hide();
			return false;
        });
        //e.preventDefault();
    });
	
	jQuery('form#register').on('submit', function (e) {
		jQuery('#register_username').focus();
		//e.preventDefault();
	});
		
	
	/*  Forget Password Ajax Popup 
	-----------------------------------------------------------------------------------*/ 
	jQuery('a.lost').on('click', function(e){
        jQuery('form#login').fadeOut(0, function () {
			jQuery('form#forgot').fadeIn(500);
		 })
		jQuery('form#forgot p.status').hide(); 
		jQuery('#user_input').show();
		jQuery('form#forgot input[type=submit]').show();
		jQuery('#user_input').focus();
        jQuery('div.popupoverlay, form#forgot a.close').on('click', function(){
            jQuery('div.popupoverlay').remove();
            jQuery('form#forgot').hide();
			return false;
        });
        //e.preventDefault();
    });
	
	 jQuery('form#forgot').on('submit', function(e){
		jQuery('#user_input').focus();
		//e.preventDefault();
    });
	
	
	
	/*	Animation with Waypoints
	-----------------------------------------------------------------------------------*/ 	
	jQuery('.animate').waypoint(function() {
	     var animation = jQuery(this).attr("data-animate");
	     jQuery(this).addClass(animation);
	     jQuery(this).addClass('animated');
	}, { offset: '80%' });
	
	
})(jQuery);