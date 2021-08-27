<?php
/* Smarty version 3.1.39, created on 2021-08-26 23:10:02
  from '/var/www/smarty/templates/job-reference.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6127a0ba7c3344_69490269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdfd289922a38bdd8586169980613c18a69b8f8' => 
    array (
      0 => '/var/www/smarty/templates/job-reference.tpl',
      1 => 1629986150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
  ),
),false)) {
function content_6127a0ba7c3344_69490269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16266430026127a0ba737972_38095514', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7632684656127a0ba743922_44268799', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2212896606127a0ba7c2a61_83270221', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_16266430026127a0ba737972_38095514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_16266430026127a0ba737972_38095514',
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
class Block_7632684656127a0ba743922_44268799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7632684656127a0ba743922_44268799',
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
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="job-list.php">ジョブ一覧</a>
              </li>
              <li class="breadcrumb-item active"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');?>
</li>
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
                <h3 class="card-title">ジョブ照会フォーム</h3>
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
class Block_2212896606127a0ba7c2a61_83270221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2212896606127a0ba7c2a61_83270221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
