<?php
/* Smarty version 3.1.39, created on 2021-07-17 22:40:35
  from '/var/www/smarty/templates/layout/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f2ddd33f3685_91626762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c7d54c79f69b75a3b9def5b04b48ea754e40bf' => 
    array (
      0 => '/var/www/smarty/templates/layout/index.tpl',
      1 => 1626484278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widget/exception.tpl' => 1,
  ),
),false)) {
function content_60f2ddd33f3685_91626762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
          <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102906178260f2ddd33c1f29_88379829', 'meta');
?>

    </head>
    <body class="hold-transition login-page">

        <?php $_smarty_tpl->_subTemplateRender('file:widget/exception.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45564634160f2ddd33f0465_71537317', 'content');
?>


        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>

        <!-- jQuery UI 1.11.4 -->
        <?php echo '<script'; ?>
 src="plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <?php echo '<script'; ?>
>
          $.widget.bridge('uibutton', $.ui.button)
        <?php echo '</script'; ?>
>

        <!-- Bootstrap 4 -->
        <?php echo '<script'; ?>
 src="plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

        <!-- AdminLTE App -->
        <?php echo '<script'; ?>
 src="dist/js/adminlte.js"><?php echo '</script'; ?>
>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5034413160f2ddd33f2351_69298806', 'script');
?>

    </body>
</html><?php }
/* {block 'meta'} */
class Block_102906178260f2ddd33c1f29_88379829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_102906178260f2ddd33c1f29_88379829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_45564634160f2ddd33f0465_71537317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_45564634160f2ddd33f0465_71537317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_5034413160f2ddd33f2351_69298806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5034413160f2ddd33f2351_69298806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'script'} */
}
