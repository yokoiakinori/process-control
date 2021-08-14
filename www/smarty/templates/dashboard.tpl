{block name='meta'}
<title>マイページ</title>
{/block} {block name='content'}
<div class="wrapper">
  {include file="common/nav.tpl"}
  {include file="common/sidebar.tpl"}

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
          {foreach $taskList as $taskItem}
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{$taskItem['name']}</h3>
              </div>
              <div class="card-body">
                <h6 class="card-title">{$taskItem['overview']}</h6>

                <p class="card-text">
                  納期:{$taskItem['dead_line']}
                </p>
                <a href="/job-detail.php?job={$taskItem@index}" class="btn btn-primary">詳細確認</a>
                {form method="post"}
                <div class="card-body">
                  <div class="form-group">
                    <label for="jobrep">工程</label>
                    <select name="Process_id" class="form-control">
                    {foreach $processList as $process}
                      <option value="{$process["id"]}">{$process["name"]}</option>
                    {/foreach}
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">送信</button>
                </div>
                {/form}
              </div>
            </div>
          </div>
          {/foreach}
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
{/block} {block name='script'} {/block}
