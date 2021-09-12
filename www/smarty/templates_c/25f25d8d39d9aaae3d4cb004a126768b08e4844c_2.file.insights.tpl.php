<?php
/* Smarty version 3.1.39, created on 2021-09-12 11:23:16
  from '/var/www/smarty/templates/insights.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613d64947eb9d1_45561037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f25d8d39d9aaae3d4cb004a126768b08e4844c' => 
    array (
      0 => '/var/www/smarty/templates/insights.tpl',
      1 => 1631413394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
    'file:part/insights-process-item.tpl' => 1,
  ),
),false)) {
function content_613d64947eb9d1_45561037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1525899443613d64947b3505_34833257', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1349749358613d64947b9ce2_38101681', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31285445613d64947ea4b8_62415371', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_1525899443613d64947b3505_34833257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_1525899443613d64947b3505_34833257',
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
class Block_1349749358613d64947b9ce2_38101681 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1349749358613d64947b9ce2_38101681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">進捗状況：<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weekList']->value[0], ENT_QUOTES, 'UTF-8');?>
~<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['weekList']->value[6], ENT_QUOTES, 'UTF-8');?>
</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>ジョブ名</th>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekList']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                      <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['day']->value, ENT_QUOTES, 'UTF-8');?>
</th>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taskList']->value, 'taskItem');
$_smarty_tpl->tpl_vars['taskItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taskItem']->value) {
$_smarty_tpl->tpl_vars['taskItem']->do_else = false;
?>
                  <tr>
                      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value[0]['name'], ENT_QUOTES, 'UTF-8');?>
</td>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekList']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                      <td>
                        <?php $_smarty_tpl->_subTemplateRender("file:part/insights-process-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                      </td>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tr>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
class Block_31285445613d64947ea4b8_62415371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_31285445613d64947ea4b8_62415371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
