<?php

/*
|--------------------------------------------------------------------------
| API Call Page
|--------------------------------------------------------------------------
|
| The Hardy Code server hooks into this pages URL to request updates and
| to performother administration activties. This page will only offer
| up results to the requesting party server if the plugin is enabled
| by the sites administrator.
|
*/

require("index.php");

if( !Plugin::status() ) {
    die();    
}

$infoArray = API::listen();