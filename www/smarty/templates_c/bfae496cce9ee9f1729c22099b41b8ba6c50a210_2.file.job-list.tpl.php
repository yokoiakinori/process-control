<?php
/* Smarty version 3.1.39, created on 2021-08-30 22:05:07
  from '/var/www/smarty/templates/part/job-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612cd783b6c407_00398398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfae496cce9ee9f1729c22099b41b8ba6c50a210' => 
    array (
      0 => '/var/www/smarty/templates/part/job-list.tpl',
      1 => 1630328598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612cd783b6c407_00398398 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobList']->value, 'jobItem');
$_smarty_tpl->tpl_vars['jobItem']->index = -1;
$_smarty_tpl->tpl_vars['jobItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jobItem']->value) {
$_smarty_tpl->tpl_vars['jobItem']->do_else = false;
$_smarty_tpl->tpl_vars['jobItem']->index++;
$__foreach_jobItem_0_saved = $_smarty_tpl->tpl_vars['jobItem'];
?>
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <div class="card-tools">
                  <form method="GET" action="" onSubmit="return check()">
                    <button type="submit" class="btn btn-tool"  name="btn_jobRemove" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-times"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value['overview'], ENT_QUOTES, 'UTF-8');?>
</h6>

                <p class="card-text">
                  納期:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value['dead_line'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <a href="/job-detail.php?job=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->index, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">詳細確認</a>
              </div>
            </div>
          </div>
<?php
$_smarty_tpl->tpl_vars['jobItem'] = $__foreach_jobItem_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
