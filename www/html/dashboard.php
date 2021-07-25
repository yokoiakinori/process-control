<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
}catch(\Exception $e){
    Template::exception($e);
}finally{
    Template::display();
}
?>