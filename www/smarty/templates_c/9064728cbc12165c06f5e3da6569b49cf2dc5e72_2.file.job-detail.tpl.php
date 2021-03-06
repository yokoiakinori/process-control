<?php
/* Smarty version 3.1.39, created on 2021-08-24 23:17:42
  from '/var/www/smarty/templates/job-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6124ff86ea9642_24399936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9064728cbc12165c06f5e3da6569b49cf2dc5e72' => 
    array (
      0 => '/var/www/smarty/templates/job-detail.tpl',
      1 => 1629814393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/nav.tpl' => 1,
    'file:common/sidebar.tpl' => 1,
  ),
),false)) {
function content_6124ff86ea9642_24399936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15870455006124ff86e52973_40300722', 'meta');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6711200686124ff86e597e0_07244985', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21346784426124ff86ea8d77_35637754', 'script');
?>

<?php }
/* {block 'meta'} */
class Block_15870455006124ff86e52973_40300722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'meta' => 
  array (
    0 => 'Block_15870455006124ff86e52973_40300722',
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
class Block_6711200686124ff86e597e0_07244985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6711200686124ff86e597e0_07244985',
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                <div class="card-tools">
                  <form method="GET" action="" onSubmit="return check()">
                    <button type="submit" class="btn btn-tool"  name="btn_jobRemove"><i class="fas fa-times"></i>
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
                <a href="/job-update.php?job=<?php echo htmlspecialchars($_GET['job'], ENT_QUOTES, 'UTF-8');?>
&jobid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobItem']->value["id"], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">ジョブを編集する</a>
              </div>
            </div>
          </div>
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
class Block_21346784426124ff86ea8d77_35637754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21346784426124ff86ea8d77_35637754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'script'} */
}
