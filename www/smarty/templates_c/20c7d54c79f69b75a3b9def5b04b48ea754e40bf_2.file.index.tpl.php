<?php
/* Smarty version 3.1.39, created on 2021-07-25 22:17:54
  from '/var/www/smarty/templates/layout/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fd64823d7225_77414050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c7d54c79f69b75a3b9def5b04b48ea754e40bf' => 
    array (
      0 => '/var/www/smarty/templates/layout/index.tpl',
      1 => 1627218580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widget/exception.tpl' => 1,
  ),
),false)) {
function content_60fd64823d7225_77414050 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28701310160fd6482355f77_25661338', 'meta');
?>

    </head>
    <body class="hold-transition login-page">

        <?php $_smarty_tpl->_subTemplateRender('file:widget/exception.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154233572060fd64823d2a27_79708464', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172609190160fd64823d57e7_45869160', 'script');
?>

    </body>
</html><?php }
/* {block 'meta'} */
class Block_28701310160fd6482355f77_25661338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_28701310160fd6482355f77_25661338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_154233572060fd64823d2a27_79708464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154233572060fd64823d2a27_79708464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_172609190160fd64823d57e7_45869160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_172609190160fd64823d57e7_45869160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'script'} */
}
