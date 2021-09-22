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
  		{$navbar}
      {if $isAdmin}
        <li class='nav-item ml-1'><a href="admin.php" class="btn btn-success">後台管理</a></li>
        <li class="nav-item ml-1">
          <a class="btn btn-warning" href="user.php?op=user_form">帳戶管理</a>
        </li>
        <li class="nav-item ml-1">
          <a class="btn btn-danger" href="user.php?op=user_logout">登出</a>
        </li>
      {else}    
      
      {/if}
  	</div>
  </div>
</nav>

 
      


      