<?php
/* Smarty version 3.1.39, created on 2021-07-17 09:00:12
  from '/var/www/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f21d8c749989_66619759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1db3bff38548ca34e9b9313bd55a24657e9c663' => 
    array (
      0 => '/var/www/smarty/templates/index.tpl',
      1 => 1626479968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f21d8c749989_66619759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107232591960f21d8c735286_39513464', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49508293760f21d8c745be5_21647840', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183992820260f21d8c748c26_35311720', 'script');
}
/* {block 'meta'} */
class Block_107232591960f21d8c735286_39513464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_107232591960f21d8c735286_39513464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <title>ログイン</title>
    <style type="text/css">
        .login-box, .register-box {
            margin: 20px auto;
        }
    </style>
<?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_49508293760f21d8c745be5_21647840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49508293760f21d8c745be5_21647840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="login-box">
        <div class="login-logo">
            <a href="/">
                <b>Admin</b>
                LTE
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">サインインしてセッションを開始する</p>
            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="text" name="email" class="form-control" placeholder="メールアドレス">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="パスワード">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-7">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            サインイン
                        </button>
                    </div>
                </div>
            </form>
            <a href="remind.php">パスワードを忘れましたか？</a>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
<?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_183992820260f21d8c748c26_35311720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_183992820260f21d8c748c26_35311720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'script'} */
}
