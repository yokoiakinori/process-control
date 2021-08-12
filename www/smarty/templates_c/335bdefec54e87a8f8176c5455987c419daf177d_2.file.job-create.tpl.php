<?php
/* Smarty version 3.1.39, created on 2021-08-12 22:39:14
  from '/var/www/smarty/templates/job-create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611524827a5ee5_92050484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335bdefec54e87a8f8176c5455987c419daf177d' => 
    array (
      0 => '/var/www/smarty/templates/job-create.tpl',
      1 => 1628775428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
  ),
),false)) {
function content_611524827a5ee5_92050484 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209082439061152482742439_11574859', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1201026619611524827496d7_86076642', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1704743805611524827a4f81_90539470', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_209082439061152482742439_11574859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_209082439061152482742439_11574859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>新規ジョブ作成</title>
<?php
}
}
/* {/block 'meta'} */
/* {block 'content'} */
class Block_1201026619611524827496d7_86076642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1201026619611524827496d7_86076642',
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
            <h1 class="m-0 text-dark">新規ジョブ作成</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="job-list.php">ジョブ一覧</a>
              </li>
              <li class="breadcrumb-item active">新規ジョブ作成</li>
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
          <div class="col-lg-6">
            <!-- /.card -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ジョブ作成フォーム</h3>
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
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6"></div>
          <!-- /.col-md-6 -->
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
class Block_1704743805611524827a4f81_90539470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1704743805611524827a4f81_90539470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
