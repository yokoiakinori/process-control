<?php

/**
 * index.php
 */

namespace ProcessControl;

use ProcessControl\controller\LoginController;
use ProcessControl\common\Template;

define('LAYOUT', 'index');

try {
    require_once '../common.php';
    LoginController::login();
} catch (\Exception $e) {
    Template::exception($e);
} finally {
    Template::display();
}