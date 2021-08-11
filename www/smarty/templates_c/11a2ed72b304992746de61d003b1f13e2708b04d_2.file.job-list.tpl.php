<?php
/* Smarty version 3.1.39, created on 2021-08-11 21:24:20
  from '/var/www/smarty/templates/job-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6113c17487f030_88874482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a2ed72b304992746de61d003b1f13e2708b04d' => 
    array (
      0 => '/var/www/smarty/templates/job-list.tpl',
      1 => 1628684653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
  ),
),false)) {
function content_6113c17487f030_88874482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2688138236113c174803ba1_35107838', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13714243056113c17480e404_45859712', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7126598746113c17487e3b6_91712405', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_2688138236113c174803ba1_35107838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_2688138236113c174803ba1_35107838',
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
class Block_13714243056113c17480e404_45859712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13714243056113c17480e404_45859712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="wrapper">
<?php $_smarty_tpl->_subTemplateRender("file:common/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img
        src="dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="dist/img/user2-160x160.jpg"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ジョブ一覧
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ジョブ一覧</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ジョブ一覧</li>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <a href="job-create.php" class="btn btn-primary"
              >新規ジョブを作成</a
            >
          </div>
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
class Block_7126598746113c17487e3b6_91712405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7126598746113c17487e3b6_91712405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
