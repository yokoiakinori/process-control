<?php
require_once 'config.php';

define('MODE',DEVELOPPING);

if(MODE === DEVELOPPING){
    ini_set('display_errors',true);
    error_reporting(E_ALL);
}else{
    ini_set('display_errors',false);
}

require_once BASE_DIR . '/autoload.php';
spl_autoload_register('autoloader');