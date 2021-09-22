<?php
/* Smarty version 3.1.30, created on 2021-06-04 10:03:50
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b9de66e14373_68174354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3560e8f4d6808c20a61a0c11d8610646863015' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\footer.tpl',
      1 => 1621521165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b9de66e14373_68174354 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="bg-light mt-3" style="height:140px;margin: 0 auto;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 foot text-center mt-5 pt-3">
                <h6><strong>Copyright &copy; All rights reserved</strong></h6>
            </div>
        </div>
    </div>
    <button type="button" class="btn bg-light float-left" data-toggle="modal" data-target="#myModal"><img src="img/ico/tool.png" alt="tool_button"></button>
</footer>
<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
	<div class="modal" id="myModal">
	    <div class="modal-dialog">
	    	<div class="modal-content">

	      	<!-- Modal Header -->
	      	<div class="modal-header">
	        	<h4 class="modal-title">管理</h4>
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>

	      	<!-- Modal body -->
	    	<div class="modal-body">           
	        	<a href="admin.php" class="btn btn-success">後台管理</a>        		
	      		<a class="btn btn-warning" href="user.php?op=user_form">帳戶管理</a>       		
	          	<a class="btn btn-danger" href="user.php?op=user_logout">登出</a>    	
	    	</div>
		    <!-- Modal footer -->
		    <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		    </div>
	    </div>
	</div>

<?php } else { ?>
	<!-- The Modal -->
	<div class="modal" id="myModal">
	    <div class="modal-dialog">
	    	<div class="modal-content">

	      	<!-- Modal Header -->
	      	<div class="modal-header">
	        	<h4 class="modal-title">管理員登入</h4>
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	      	</div>

	      	<!-- Modal body -->
	    	<div class="modal-body">    
	        	<form action="user.php" method="post" class="form" role="form">
		            <div class="form-group">
		              <input type="text" name="user_id" id="user_id" placeholder="帳號" class="form-control form-control-sm" type="text" required="">
		            </div>
		            <div class="form-group">
		              <input type="password" name="user_passwd" id="user_passwd" placeholder="密碼" class="form-control form-control-sm" type="text" required="">
		            </div>
		            <div class="form-group">
		              <input type="hidden" name="op" value="user_login">
		              <button type="submit" name="button" class="btn btn-primary btn-block">登入</button>
		            </div>
		            <!--label class="col-md-4">
		              <a href="user.php?op=user_form" class="btn btn-link">註冊</a>
		            </label-->
	        	</form>
	    	</div>
		    <!-- Modal footer -->
		    <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		    </div>
	    </div>
	</div>
<?php }
}
}
