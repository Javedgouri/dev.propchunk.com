<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Facebook App details
| -------------------------------------------------------------------
|
| To get an facebook app details you have to be a registered developer
| at http://developer.facebook.com and create an app for your project.
|
|  facebook_app_id               string  Your facebook app ID.
|  facebook_app_secret           string  Your facebook app secret.
|  facebook_login_type           string  Set login type. (web, js, canvas)
|  facebook_login_redirect_url   string  URL tor redirect back to after login. Do not include domain.
|  facebook_logout_redirect_url  string  URL tor redirect back to after login. Do not include domain.
|  facebook_permissions          array   The permissions you need.
*/

//$config['app_Id']  = '355129341499792';
//$config['app_secret'] = '29dc492e3f0947072dced1d128a637c8';
$config['facebook_app_id']              = '355129341499792';
$config['facebook_app_secret']          = '29dc492e3f0947072dced1d128a637c8';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'Test/dashboard';
$config['facebook_logout_redirect_url'] = 'Auth/logout';
$config['facebook_permissions']         = array('email,user_birthday,user_location,public_profile');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;

?>