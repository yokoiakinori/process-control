<?php
/* Smarty version 3.1.39, created on 2021-08-30 22:17:56
  from '/var/www/smarty/templates/job-reference.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612cda84eb4d28_54633783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdfd289922a38bdd8586169980613c18a69b8f8' => 
    array (
      0 => '/var/www/smarty/templates/job-reference.tpl',
      1 => 1630329456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
    'file:part/job-form.tpl' => 1,
    'file:part/job-list.tpl' => 1,
  ),
),false)) {
function content_612cda84eb4d28_54633783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1826442920612cda84e6f404_26761852', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2044399131612cda84e7bb28_10672335', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_771405161612cda84eb2d41_14537859', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_1826442920612cda84e6f404_26761852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_1826442920612cda84e6f404_26761852',
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
class Block_2044399131612cda84e7bb28_10672335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2044399131612cda84e7bb28_10672335',
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
            <?php $_smarty_tpl->_subTemplateRender("file:part/job-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          <?php $_smarty_tpl->_subTemplateRender("file:part/job-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
class Block_771405161612cda84eb2d41_14537859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_771405161612cda84eb2d41_14537859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
