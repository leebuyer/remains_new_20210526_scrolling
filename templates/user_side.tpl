<div class="sidebar">
  	<div class="card">
    	<div class="card-header sidebar-title font-weight-bolder text-center p-2">管理系統</div>
    	<div class="card-body">            
        	<div class="alert alert-dark text-center">
		  		<strong>{$login_user.user_name}</strong>您好！歡迎光臨{$web_name}
			</div>
			{if $op!="index.php"}
		  		<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
			{/if}
			{if $isAdmin}
				<a href="user.php?op=user_display&user_sn={$login_user.user_sn}" class="btn btn-block btn-info">我的帳號</a>
				<a href="admin.php" class="btn btn-block btn-warning">後台管理</a>
				<a href="user.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
			{/if}
		</div>
  	</div>
</div><!-- End sidebar -->
 