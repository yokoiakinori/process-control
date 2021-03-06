<?php
/* Smarty version 3.1.39, created on 2021-09-12 11:59:34
  from '/var/www/smarty/templates/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613d6d16392938_52603098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c253a1cfcce7c9575cf36080b6143a1feb8f00' => 
    array (
      0 => '/var/www/smarty/templates/dashboard.tpl',
      1 => 1631415571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
  ),
),false)) {
function content_613d6d16392938_52603098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1813548085613d6d1632a0c1_68590645', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1813917544613d6d1632e790_03795797', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102547621613d6d163920a0_46747088', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_1813548085613d6d1632a0c1_68590645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_1813548085613d6d1632a0c1_68590645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>マイページ</title>
<?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_1813917544613d6d1632e790_03795797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1813917544613d6d1632e790_03795797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/smarty/plugins/block.form.php','function'=>'smarty_block_form',),));
?>

<div class="wrapper">
  <?php $_smarty_tpl->_subTemplateRender("file:common/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:common/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taskList']->value, 'taskItem');
$_smarty_tpl->tpl_vars['taskItem']->index = -1;
$_smarty_tpl->tpl_vars['taskItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taskItem']->value) {
$_smarty_tpl->tpl_vars['taskItem']->do_else = false;
$_smarty_tpl->tpl_vars['taskItem']->index++;
$__foreach_taskItem_0_saved = $_smarty_tpl->tpl_vars['taskItem'];
?>
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value[0]['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value[0]['overview'], ENT_QUOTES, 'UTF-8');?>
</h6>

                <p class="card-text">
                  納期:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value[0]['dead_line'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <a href="/job-detail.php?job=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->index, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">詳細確認</a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taskItem']->value, 'currentProcess');
$_smarty_tpl->tpl_vars['currentProcess']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currentProcess']->value) {
$_smarty_tpl->tpl_vars['currentProcess']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['currentProcess']->value['process_id']))) {?>
                  <?php if (!$_smarty_tpl->tpl_vars['currentProcess']->value['end_time'] == null) {?>
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h6 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processList']->value[$_smarty_tpl->tpl_vars['currentProcess']->value['process_id']-1]["name"], ENT_QUOTES, 'UTF-8');?>
</h6>
                        <div class="card-tools">
                          <form method="GET" action="" onSubmit="return check()">
                            <button type="submit" class="btn btn-tool"  name="btn_processRemove" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['process_id'], ENT_QUOTES, 'UTF-8');?>
"><i class="fas fa-times"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                        開始:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['start_time'], ENT_QUOTES, 'UTF-8');?>
 
                        </p>
                        <p class="card-text">
                        終了:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['end_time'], ENT_QUOTES, 'UTF-8');?>
 
                        </p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                           工程入力の修正
                        </button>
                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">入力工程の時間修正</h4>
                              </div>
                              <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post"));
$_block_repeat=true;
echo smarty_block_form(array('method'=>"post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="modal-body">
                                  <label for="process_start">開始時間</label>
                                  <div
                                    class="input-group date"
                                    id="reservationdatetime_start"
                                    data-target-input="nearest"
                                  >
                                    <input
                                      type="text"
                                      class="form-control datetimepicker-input"
                                      name="start_time"
                                      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['start_time'], ENT_QUOTES, 'UTF-8');?>
"
                                      data-target="#reservationdatetime_start"
                                    />
                                    <div
                                      class="input-group-append"
                                      data-target="#reservationdatetime_start"
                                      data-toggle="datetimepicker"
                                    >
                                      <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <label for="process_end">終了時間</label>
                                  <div
                                    class="input-group date"
                                    id="reservationdatetime_end"
                                    data-target-input="nearest"
                                  >
                                    <input
                                      type="text"
                                      class="form-control datetimepicker-input"
                                      name="end_time"
                                      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['end_time'], ENT_QUOTES, 'UTF-8');?>
"
                                      data-target="#reservationdatetime_end"
                                    />
                                    <div
                                      class="input-group-append"
                                      data-target="#reservationdatetime_end"
                                      data-toggle="datetimepicker"
                                    >
                                      <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                                  <button type="submit" name="process_edit" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['process_id'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">送信</button>
                                </div>
                              <?php $_block_repeat=false;
echo smarty_block_form(array('method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } else { ?>
                      <div class="card-body bg-primary">
                        <h6 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processList']->value[$_smarty_tpl->tpl_vars['currentProcess']->value['process_id']-1]["name"], ENT_QUOTES, 'UTF-8');?>
</h6>
                        <p class="card-text">
                        開始:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['start_time'], ENT_QUOTES, 'UTF-8');?>

                        </p>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post"));
$_block_repeat=true;
echo smarty_block_form(array('method'=>"post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <button type="submit" name="process_finish" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentProcess']->value['process_id'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">完了</button>
                        <?php $_block_repeat=false;
echo smarty_block_form(array('method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                      </div>
                  <?php }?>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('method'=>"post"));
$_block_repeat=true;
echo smarty_block_form(array('method'=>"post"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="jobrep">工程入力</label>
                    <select name="process_id" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processList']->value, 'process');
$_smarty_tpl->tpl_vars['process']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['process']->value) {
$_smarty_tpl->tpl_vars['process']->do_else = false;
?>
                      <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['process']->value["id"], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['process']->value["name"], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="hidden" name="job_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value[0]['id'], ENT_QUOTES, 'UTF-8');?>
">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="process_insert" value="工程入力" class="btn btn-primary">送信</button>
                </div>
                <?php $_block_repeat=false;
echo smarty_block_form(array('method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
              </div>
            </div>
          </div>
          <?php
$_smarty_tpl->tpl_vars['taskItem'] = $__foreach_taskItem_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">Anything you want</div>
    <!-- Default to the left -->
    <strong
      >Copyright &copy; 2014-2019
      <a href="https://adminlte.io">AdminLTE.io</a>.</strong
    >
    All rights reserved.
  </footer>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_102547621613d6d163920a0_46747088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_102547621613d6d163920a0_46747088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
