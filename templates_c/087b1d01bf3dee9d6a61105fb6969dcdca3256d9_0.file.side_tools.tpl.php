<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:52:59
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\side_tools.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8eccbce1cd1_12482567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '087b1d01bf3dee9d6a61105fb6969dcdca3256d9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\side_tools.tpl',
      1 => 1622214569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8eccbce1cd1_12482567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-dark text-center">
  <strong><?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
</strong>您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['op']->value != "index.php") {?>
  <a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<?php }
if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
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
<?php }?>
<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
<?php }
}
