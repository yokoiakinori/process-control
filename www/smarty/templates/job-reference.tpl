{block name='meta'}
<title>新規ジョブ作成</title>
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
            <h1 class="m-0 text-dark">{$page_title}</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="job-list.php">ジョブ一覧</a>
              </li>
              <li class="breadcrumb-item active">{$page_title}</li>
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
              {form method="post"}
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
                  {foreach $clientList as $client}
                    <option value="{$client["id"]}">{$client["name"]}</option>
                  {/foreach}
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
              {/form}
            </div>
          </div>
          {foreach $jobList as $jobItem}
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{$jobItem['name']}</h3>
                <div class="card-tools">
                  <form method="GET" action="" onSubmit="return check()">
                    <button type="submit" class="btn btn-tool"  name="btn_jobRemove" value="{$jobItem['id']}"><i class="fas fa-times"></i>
                    </button>
                  </form>
                </div>
              </div>
              <div class="card-body">
                <h6 class="card-title">{$jobItem['overview']}</h6>

                <p class="card-text">
                  納期:{$jobItem['dead_line']}
                </p>
                <a href="/job-detail.php?job={$jobItem@index}" class="btn btn-primary">詳細確認</a>
              </div>
            </div>
          </div>
          {/foreach}
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
{/block} {block name='script'} {/block}
