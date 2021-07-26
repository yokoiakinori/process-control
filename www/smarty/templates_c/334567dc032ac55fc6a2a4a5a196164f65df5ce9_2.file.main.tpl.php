<?php
/* Smarty version 3.1.39, created on 2021-07-26 23:23:14
  from '/var/www/smarty/templates/layout/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fec55221f683_13477197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '334567dc032ac55fc6a2a4a5a196164f65df5ce9' => 
    array (
      0 => '/var/www/smarty/templates/layout/main.tpl',
      1 => 1627309384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:widget/exception.tpl' => 1,
  ),
),false)) {
function content_60fec55221f683_13477197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
      name="viewport"
    />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73876587660fec55220c9e6_41544659', 'meta');
?>

  </head>
  <body class="hold-transition sidebar-mini">
    <?php $_smarty_tpl->_subTemplateRender('file:widget/exception.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166761984160fec55221d3b7_44759681', 'content');
?>


    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap 4 -->
    <?php echo '<script'; ?>
 src="plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <!-- AdminLTE App -->
    <?php echo '<script'; ?>
 src="dist/js/adminlte.min.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21106822360fec55221eca7_53239482', 'script');
?>

  </body>
</html>
<?php }
/* {block 'meta'} */
class Block_73876587660fec55220c9e6_41544659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_73876587660fec55220c9e6_41544659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_166761984160fec55221d3b7_44759681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166761984160fec55221d3b7_44759681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_21106822360fec55221eca7_53239482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21106822360fec55221eca7_53239482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
