<div class="alert alert-dark text-center">
  <strong>{$login_user.user_name}</strong>您好！歡迎光臨{$web_name}
</div>

{if $op!="index.php"}
  <a href="index.php" class="btn btn-block btn-primary">回首頁</a>
{/if}
{if $isAdmin}
    <a href="user.php?op=user_form" class="btn btn-block btn-warning">帳戶管理</a>
    <a href="admin.php?op=article_form" class="btn btn-block btn-secondary">發布文章</a>
    <!---發布榕樹下文章--->
    <a href="admin.php?op=tree_reason_form" class="btn btn-block btn-success">發布榕樹下遺址發掘原因文章</a>
    <a href="admin.php?op=tree_action_form" class="btn btn-block btn-success">發布榕樹下一起考古去文章</a>
    <a href="admin.php?op=tree_appearance_form" class="btn btn-block btn-success">發布榕樹下拼湊史前人的模樣文章</a>
    <a href="admin.php?op=tree_more_form" class="btn btn-block btn-success">發布榕樹下更多遺址事文章</a>
    <a href="admin.php?op=tree_toolbox_form" class="btn btn-block btn-success">發布榕樹下老師工具箱文章</a>
    <!---發布發布虎頭山文章--->
    <a href="admin.php?op=tiger_reason_form" class="btn btn-block btn-info">發布虎頭山遺址發掘原因文章</a>
    <a href="admin.php?op=tiger_action_form" class="btn btn-block btn-info">發布虎頭山一起考古去文章</a>
    <a href="admin.php?op=tiger_appearance_form" class="btn btn-block btn-info">發布虎頭山拼湊史前人的模樣文章</a>
    <a href="admin.php?op=tiger_more_form" class="btn btn-block btn-info">發布虎頭山更多遺址事文章</a>
    <a href="admin.php?op=tiger_toolbox_form" class="btn btn-block btn-info">發布榕虎頭山老師工具箱文章</a>
{/if}
<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
