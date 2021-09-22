<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:51:26
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\user_side.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8ec6e678260_76779817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28f6e6803ced029d23ab803c2b3e51b7b05d1f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\user_side.tpl',
      1 => 1621521148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8ec6e678260_76779817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar">
  	<div class="card">
    	<div class="card-header sidebar-title font-weight-bolder text-center p-2">管理系統</div>
    	<div class="card-body">            
        	<div class="alert alert-dark text-center">
		  		<strong><?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_name'];?>
</strong>您好！歡迎光臨<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['op']->value != "index.php") {?>
		  		<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
				<a href="user.php?op=user_display&user_sn=<?php echo $_smarty_tpl->tpl_vars['login_user']->value['user_sn'];?>
" class="btn btn-block btn-info">我的帳號</a>
				<a href="admin.php" class="btn btn-block btn-warning">後台管理</a>
				<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
			<?php }?>
		</div>
  	</div>
</div><!-- End sidebar -->
 <?php }
}
