<?php
// global path constants.
define('PATH_ABSOLUTE', dirname(__FILE__) . '/../');
define('PATH_INCLUDES', PATH_ABSOLUTE . 'includes/');

// require the website class.
require_once(PATH_INCLUDES . 'website.class.php');

// global website variables.
$website['discord_client'] = '709918560331366502';
$website['discord_secret'] = 'c53i7576aFKdwcAOyLBAnRskptT-z8xA';
$website['discord_scopes'] = 'identify, email';
$website['name']           = 'Charon';
$website['redirect']       = 'https://charon.gg/';
$website['access']         = 'https://dashboard.charon.gg/access';
$website['url']            = website::website_url();
$website['current_url']    = website::current_url();

// start a session.
session_start();
?>
