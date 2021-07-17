<?php
/* Smarty version 3.1.39, created on 2021-07-17 09:05:22
  from '/var/www/smarty/templates/layout/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f21ec27d18c1_98736463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c7d54c79f69b75a3b9def5b04b48ea754e40bf' => 
    array (
      0 => '/var/www/smarty/templates/layout/index.tpl',
      1 => 1626480317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f21ec27d18c1_98736463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185242444560f21ec27c4d48_37716067', 'meta');
?>

    </head>
    <body class="hold-transition login-page">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187753453960f21ec27ce1b8_24822468', 'content');
?>


        <?php echo '<script'; ?>
 src="plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34676435760f21ec27d0153_13587488', 'script');
?>

    </body>
</html><?php }
/* {block 'meta'} */
class Block_185242444560f21ec27c4d48_37716067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_185242444560f21ec27c4d48_37716067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_187753453960f21ec27ce1b8_24822468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187753453960f21ec27ce1b8_24822468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_34676435760f21ec27d0153_13587488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_34676435760f21ec27d0153_13587488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'script'} */
}
