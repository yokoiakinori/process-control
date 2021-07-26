<?php
/* Smarty version 3.1.39, created on 2021-07-26 21:11:49
  from '/var/www/smarty/templates/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fea685018e78_90593273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c253a1cfcce7c9575cf36080b6143a1feb8f00' => 
    array (
      0 => '/var/www/smarty/templates/dashboard.tpl',
      1 => 1626480534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fea685018e78_90593273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50671628960fea68500d0f3_11651948', 'meta');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175119154960fea685017796_09206266', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93091355960fea6850186b9_50288261', 'script');
}
/* {block 'meta'} */
class Block_50671628960fea68500d0f3_11651948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_50671628960fea68500d0f3_11651948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_175119154960fea685017796_09206266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175119154960fea685017796_09206266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12">
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_93091355960fea6850186b9_50288261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_93091355960fea6850186b9_50288261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'script'} */
}
