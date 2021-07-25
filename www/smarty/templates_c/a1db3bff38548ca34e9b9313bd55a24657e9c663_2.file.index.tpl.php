<?php
/* Smarty version 3.1.39, created on 2021-07-18 19:40:40
  from '/var/www/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f4052833c761_52241892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1db3bff38548ca34e9b9313bd55a24657e9c663' => 
    array (
      0 => '/var/www/smarty/templates/index.tpl',
      1 => 1626604583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f4052833c761_52241892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203193010760f405282bb027_09133356', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165199853360f405282cb4f6_26237597', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194738317260f4052833bf86_55487599', 'script');
}
/* {block 'meta'} */
class Block_203193010760f405282bb027_09133356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_203193010760f405282bb027_09133356',
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
class Block_165199853360f405282cb4f6_26237597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165199853360f405282cb4f6_26237597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/smarty/plugins/block.form.php','function'=>'smarty_block_form',),));
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
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post"));
$_block_repeat=true;
echo smarty_block_form(array('method'=>"post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
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
            <?php $_block_repeat=false;
echo smarty_block_form(array('method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
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
class Block_194738317260f4052833bf86_55487599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_194738317260f4052833bf86_55487599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'script'} */
}
