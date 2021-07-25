<?php
/* Smarty version 3.1.39, created on 2021-07-17 09:09:57
  from '/var/www/smarty/templates/widget/exception.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f21fd5eea290_54231722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc67011ec8de1722d284f85306e9bf6651021b6' => 
    array (
      0 => '/var/www/smarty/templates/widget/exception.tpl',
      1 => 1626480587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f21fd5eea290_54231722 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = @$_smarty_tpl->tpl_vars['exception']->value)===null||$tmp==='' ? null : $tmp)) {?>
    <div class="alert alert-danger">
        <h4>
            <i class="icon fa fa-ban"></i>
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['exception']->value->getCode())===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <p><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['exception']->value->getMessage())===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
<?php }
}
}
