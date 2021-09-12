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
            <h1 class="m-0 text-dark">{$page_title}</h1>
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
          {foreach $taskList as $taskItem}
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">{$taskItem[0]['name']}</h3>
              </div>
              <div class="card-body">
                <h6 class="card-title">{$taskItem[0]['overview']}</h6>

                <p class="card-text">
                  納期:{$taskItem[0]['dead_line']}
                </p>
                <a href="/job-detail.php?job={$taskItem@index}" class="btn btn-primary">詳細確認</a>
                {foreach $taskItem as $currentProcess}
                {if isset($currentProcess['process_id'])}
                  {if !$currentProcess['end_time']==null}
                    <div class="card card-primary card-outline">
                      <div class="card-header">
                        <h6 class="card-title">{$processList[$currentProcess['process_id']-1]["name"]}</h6>
                        <div class="card-tools">
                          <form method="GET" action="" onSubmit="return check()">
                            <button type="submit" class="btn btn-tool"  name="btn_processRemove" value="{$currentProcess['process_id']}"><i class="fas fa-times"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                        開始:{$currentProcess['start_time']} 
                        </p>
                        <p class="card-text">
                        終了:{$currentProcess['end_time']} 
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
                              {form method="post"}
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
                                      value="{$currentProcess['start_time']}"
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
                                      value="{$currentProcess['end_time']}"
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
                                  <button type="submit" name="process_edit" value="{$currentProcess['process_id']}" class="btn btn-primary">送信</button>
                                </div>
                              {/form}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  {else}
                      <div class="card-body bg-primary">
                        <h6 class="card-title">{$processList[$currentProcess['process_id']-1]["name"]}</h6>
                        <p class="card-text">
                        開始:{$currentProcess['start_time']}
                        </p>
                        {form method="post"}
                        <button type="submit" name="process_finish" value="{$currentProcess['process_id']}" class="btn btn-primary">完了</button>
                        {/form}
                      </div>
                  {/if}
                {/if}
                {/foreach}
                {form method="post"}
                <div class="card-body">
                  <div class="form-group">
                    <label for="jobrep">工程入力</label>
                    <select name="process_id" class="form-control">
                    {foreach $processList as $process}
                      <option value="{$process["id"]}">{$process["name"]}</option>
                    {/foreach}
                    </select>
                    <input type="hidden" name="job_id" value="{$taskItem[0]['id']}">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="process_insert" value="工程入力" class="btn btn-primary">送信</button>
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
