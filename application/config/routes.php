<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['cam-tales'] = 'cam/index';
$route['cam-tales/create'] = 'cam/upload';
$route['cam-tales/activity'] = 'cam/index';
$route['cam-tales/uploads'] = 'cam/index';
$route['cam-tales/presenters'] = 'cam/presenters';

$route['cam-tales/user'] = 'cam/user_preview';
$route['cam-tales/user/(:any)'] = 'cam/user_preview/$1';

//$route['cam-tales/presenters'] = 'cam/presenters';
$route['cam-tales/presenters/(:any)']= 'cam/presenters/$1';
$route['cam-tales/account'] = 'cam/account';
$route['cam-tales/account/(:any)'] = 'cam/account/$1';


$route['cam-tales/views/(:num)'] = 'cam/view/$1';
$route['(:any)'] = 'cam/view/$1';
//End Of Camera Pages

$route['account'] = 'index/user';

$route['contact'] = 'page/contact';
$route['about'] = 'page/about';

//News Pages
$route['news'] = 'news/index';
$route['news/create'] = 'cpanel/index/create_post';
//End Of News Pages
//User Pages
$route['auth/edit-password'] = 'home/edit_password';
$route['auth/edit-account'] = 'home/edit_account';
$route['default_controller'] = 'index';
$route['404_override'] = 'Error';
$route['translate_uri_dashes'] = FALSE;

$route['cp'] = 'cpanel/index/index';
$route['cp/dashboard'] = 'cpanel/index/home';
$route['cp/users'] = 'cpanel/index/users';
$route['cp/users/create'] = 'cpanel/index/create_user';
$route['cp/moderators'] = 'cpanel/index/moderators';
$route['cp/presenters'] = 'cpanel/index/presenters';
$route['cp/groups'] = 'cpanel/index/groups';
$route['cp/settings'] = 'cpanel/index/settings';
$route['cp/ban-user'] = 'cpanel/index/ban';
$route['cp/news'] = 'cpanel/index/news';
$route['cp/register'] = 'cpanel/index/create_user';
$route['cp/create-post'] = 'cpanel/index/create_post';
$route['cp/create-news'] = 'cpanel/index/create_post';
$route['cp/modify-post/(:any)'] = 'news/modify/$1';

$route['admin/'] = 'administrative/index';
$route['admin/roles'] = 'administrative/roles';
$route['admin/users'] = 'administrative/users';

$route['contact'] = 'pages/contact';

$route['comments'] = 'comments/index';
$route['menu'] = 'menu/index';

//blog pages
$route['blog'] = 'blog/index';
$route['blog/create'] = 'blog/create_news';
$route['blog/modify'] = 'blog/modify';
//end of blog pages

//Camera Management 
$route['cp/camera'] = 'cpanel/camera/index';
//End Of Camera Management

$route['test'] = 'test/index';

//Advertisment 
$route['cp/uploadads'] = 'cpanel/index/uploadads';
$route['cp/manageads'] = 'cpanel/index/manageads';
$route['cp/manageads/(:any)'] = 'cpanel/index/manageads/$1';
$route['cp/add_ads'] = 'cpanel/index/add_ads';

//Business Listing
$route['cp/business_list'] = 'cpanel/index/business_list';
$route['cp/business_list/(:any)'] = 'cpanel/index/business_list/$1';

//users Business listing views
$route['business/biz_listing'] = 'business/business';
// $route['business/biz_listing'] = 'business/business';
// $route['business/biz_listing/(:any)'] = 'business/business/$1';
// $route['business/preview/(:any)'] = 'business/business/$1';
$route['business/(:any)'] = 'business/business/$1';
$route['business/preview'] = 'business/get_business';
$route['business/preview/(:any)'] = 'business/get_business/$1';
$route['business/listing/state'] = 'business/get_business/';
$route['business/listing/state/(:any)'] = 'business/get_business/$1';

// $route['business/biz_listing'] = 'business/business/get_list_view/';
// $route['business/biz_listing/(:any)'] = 'business/business/get_list_view/$1';


//Business Category
$route['cp/biz_category'] = 'cpanel/index/biz_category';
$route['cp/biz_category/(:any)'] = 'cpanel/index/biz_category/$1';

//Isee_Isay
//$route['blogger'] = 'isee/test_new';
//$route['isee/(:any)'] = 'isee/test_new/$1';
//$route['isee/presenters'] = 'isee/isee';
$route['blogger'] = 'isee/test_new';
$route['blogger/(:any)/comment'] = 'isee/get_presenter/$1';
$route['blogger/(:any)'] = 'isee/test_new/$1';
$route['blogger/(:any)/(:any)'] = 'isee/test_new/$1';

//$route['isee/new'] = 'isee/test_new';
//$route['isee/new/(:any)'] = 'isee/test_new/$1';
// $route['isee/(:any)'] = 'isee/presenter/$1';


// $route['business/(:any)'] = 'business/business/$1';

//Creating Blogs and Managing Presenters

$route['cp/presenter_blog'] = 'cpanel/index/presenter_blog';
$route['cp/presenter/status'] = 'cpanel/index/presenter_blog';

$route['cp/presenter_blog/(:any)'] = 'cpanel/index/presenter_blog/$1';
$route['cp/presenter_blog/blog'] = 'cpanel/index/presenter_blog';
$route['cp/presenter_blog/blog/(:any)'] = 'cpanel/index/presenter_blog/$1';
$route['cp/presenter_blog/edit'] = 'cpanel/index/presenter_blog';
$route['cp/presenter_blog/edit/(:any)'] = 'cpanel/index/presenter_blog/$1';
$route['cp/presenter_blog/blog/edit/(:any)'] ='cpanel/index/presenter_blog/$1';
$route['cp/presenter_blog/blog/publish/(:any)'] ='cpanel/index/presenter_blog/$1';
$route['cp/presenter_blog/edit/(:any)/delete'] = 'cpanel/index/deleteBlog/$1';
$route['cp/presenter/delete/(:any)'] = 'cpanel/index/deleteBlog/$1';
$route['cp/presenter/confirm/delete/(:any)'] = 'cpanel/index/deleteBlog/$1';
$route['cp/presenter/new/(:any)'] = 'cpanel/index/uploadPage/$1';
$route['cp/presenter/(:any)/upload'] = 'cpanel/index/uploadPage/$1/create';
$route['cp/presenter/(:any)/upload/publish/(:any)'] = 'cpanel/index/uploadPage/$1/publish/$1';
//Edit Profile pic
$route['cp/presenter_blog/blog/(:any)/edit'] = 'cpanel/index/presenter_blog/$1';




$route['opinion'] = 'index/opinion';
$route['opinion/(:any)'] = 'index/opinion/$1';
$route['opinion/view/(:any)'] = 'index/opinion/view/$1';

//cpanel Opinion
$route['cp/opinion'] = 'cpanel/index/opinion';
$route['cp/opinion/(:any)'] = 'cpanel/index/opinion/$1';
$route['cp/opinion/view/(:any)'] = 'cpanel/index/opinion/$1';
$route['cp/opinion/Publish/(:any)'] = 'cpanel/index/opinion/$1';
$route['cp/opinion/edit/(:any)'] = 'cpanel/index/opinion/$1';
$route['cp/opinion/edit/save/(:any)'] = 'cpanel/index/opinion/$1';


//Latest update on Nowayo.com

//Presenter's Blog Post Management

$route['cp/presenter/blog/post'] = 'cpanel/index/blog_post';
$route['cp/presenter/blog/post/(:any)'] = 'cpanel/index/blog_post/$1';
$route['cp/presenter/blog/post/add'] = 'cpanel/index/blog_post';
$route['cp/presenter/blog/post/add/(:any)'] = 'cpanel/index/blog_post/$1';
$route['cp/presenter/blog/post/true'] = 'cpanel/index/presenter_blog';




