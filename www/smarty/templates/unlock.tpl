{block name='meta'}
    <style type="text/css">
        .login-box, .register-box {
            margin: 20px auto;
        }
    </style>
{/block}
{block name='content'}
    <div class="login-box">
        <div class="login-logo">
            <a href="/">
                <b>Admin</b>
                LTE
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">

        {if $is_lock}
            <p class="login-box-msg">ロックを解除するには、下のボタンを押してください。</p>

            <form action="" method="post">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            ロックを解除する
                        </button>
                    </div>
                </div>
            </form>
        {else}
            <p class="login-box-msg">アカウントはロックされていません。</p>
            <p class="login-box-msg">
                <a href="/">ログインページ</a> よりログインしてください。
            </p><p class="login-box-msg">アカウントはロックされていません。</p>
            <p class="login-box-msg">
                <a href="/">ログインページ</a> よりログインしてください。
            </p>
        {/if}

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
{/block}
{block name='script'}
{/block}