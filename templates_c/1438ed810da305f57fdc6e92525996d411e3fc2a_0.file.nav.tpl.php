<?php
/* Smarty version 3.1.30, created on 2021-06-03 09:29:38
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b884e2dee828_76600541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1438ed810da305f57fdc6e92525996d411e3fc2a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\nav.tpl',
      1 => 1621867004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b884e2dee828_76600541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light sticky-top" id="ftco-navbar">
  <div class="container">
    <!-- Brand/logo -->
      <a class="navbar-brand" href="#">
    <img src="" alt="logo" style="">
      </a>
  	<a class="navbar-brand" href="index.php">桃園考古遺址共同入口網站</a>
  	<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" wfd-id="843" aria-expanded="false">
    <span class="navbar-toggler-icon" wfd-id="813"></span>
    </button>

  	<div class="collapse navbar-collapse" id="navb" wfd-id="807">
      <ul class="navbar-nav ml-auto">
  		<?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>

      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <li class='nav-item ml-1'><a href="admin.php" class="btn btn-success">後台管理</a></li>
        <li class="nav-item ml-1">
          <a class="btn btn-warning" href="user.php?op=user_form">帳戶管理</a>
        </li>
        <li class="nav-item ml-1">
          <a class="btn btn-danger" href="user.php?op=user_logout">登出</a>
        </li>
      <?php } else { ?>    
      
      <?php }?>
  	</div>
  </div>
</nav>

 
      


      <?php }
}
