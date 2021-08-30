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