<?php
/* Smarty version 3.1.39, created on 2021-08-12 22:53:00
  from '/var/www/smarty/templates/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611527bca80a50_94153957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07c253a1cfcce7c9575cf36080b6143a1feb8f00' => 
    array (
      0 => '/var/www/smarty/templates/dashboard.tpl',
      1 => 1628776378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
  ),
),false)) {
function content_611527bca80a50_94153957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135886632611527bca419f9_91966138', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1352262182611527bca47b66_57586531', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_327423512611527bca7fea9_01368984', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_135886632611527bca419f9_91966138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_135886632611527bca419f9_91966138',
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
class Block_1352262182611527bca47b66_57586531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1352262182611527bca47b66_57586531',
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
            <h1 class="m-0 text-dark">タスク一覧</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
                <h3 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value['overview'], ENT_QUOTES, 'UTF-8');?>
</h6>

                <p class="card-text">
                  納期:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->value['dead_line'], ENT_QUOTES, 'UTF-8');?>

                </p>
                <a href="/job-detail.php?job=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['taskItem']->index, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">詳細確認</a>
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
class Block_327423512611527bca7fea9_01368984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_327423512611527bca7fea9_01368984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
