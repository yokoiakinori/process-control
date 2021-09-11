<?php
/* Smarty version 3.1.39, created on 2021-09-11 23:23:36
  from '/var/www/smarty/templates/part/insights-process-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613cbbe8bd7134_58994482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b37e77909117dbe82d9e299c62b9086fdb68cb' => 
    array (
      0 => '/var/www/smarty/templates/part/insights-process-item.tpl',
      1 => 1631370214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613cbbe8bd7134_58994482 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taskItem']->value, 'currentProcess');
$_smarty_tpl->tpl_vars['currentProcess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currentProcess']->value) {
$_smarty_tpl->tpl_vars['currentProcess']->do_else = false;
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['currentProcess']->value['process_id']))) {?>
        <?php if ($_smarty_tpl->tpl_vars['currentProcess']->value['start_time'] <= $_smarty_tpl->tpl_vars['day']->value && $_smarty_tpl->tpl_vars['currentProcess']->value['end_time'] >= $_smarty_tpl->tpl_vars['day']->value) {?>
            <p style="font-size: 14px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processList']->value[$_smarty_tpl->tpl_vars['currentProcess']->value['process_id']-1]["name"], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
