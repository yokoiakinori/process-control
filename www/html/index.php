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
    // ログイン
    LoginController::login();
} catch (\Exception $e) {
    // 例外をテンプレートにアサインする
    Template::exception($e);
} finally {
    // テンプレートを表示
    Template::display();
}