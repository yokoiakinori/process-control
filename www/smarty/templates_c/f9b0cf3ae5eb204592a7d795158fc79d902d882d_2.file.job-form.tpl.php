<?php
/* Smarty version 3.1.39, created on 2021-08-30 22:17:45
  from '/var/www/smarty/templates/part/job-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612cda79c17ef4_37627913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b0cf3ae5eb204592a7d795158fc79d902d882d' => 
    array (
      0 => '/var/www/smarty/templates/part/job-form.tpl',
      1 => 1630329403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612cda79c17ef4_37627913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/smarty/plugins/block.form.php','function'=>'smarty_block_form',),));
?>
<!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');?>
フォーム</h3>
              </div>
              <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post"));
$_block_repeat=true;
echo smarty_block_form(array('method'=>"post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="jobtitle">ジョブ名</label>
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      placeholder="ジョブ名を入力してください。"
                    />
                  </div>
                  <div class="form-group">
                  <label for="jobrep">クライアント</label>
                  <select name="client_id" class="form-control">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientList']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client']->value["id"], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client']->value["name"], ENT_QUOTES, 'UTF-8');?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="joboverview">概要</label>
                    <textarea
                      rows="3"
                      class="form-control"
                      name="overview"
                      placeholder="作業内容を入力してください。"
                    ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="joboverview">製作部数</label>
                    <input
                      type="number"
                      class="form-control"
                      name="quantity"
                      placeholder="製作部数を入力してください。"
                    />
                  </div>
                  <div class="form-group">
                    <label for="jobdeadline">納期</label>
                    <div
                      class="input-group date"
                      id="reservationdate"
                      data-target-input="nearest"
                    >
                      <input
                        type="text"
                        class="form-control datetimepicker-input"
                        name="dead_line"
                        data-target="#reservationdate"
                      />
                      <div
                        class="input-group-append"
                        data-target="#reservationdate"
                        data-toggle="datetimepicker"
                      >
                        <div class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
              <?php $_block_repeat=false;
echo smarty_block_form(array('method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div><?php }
}
