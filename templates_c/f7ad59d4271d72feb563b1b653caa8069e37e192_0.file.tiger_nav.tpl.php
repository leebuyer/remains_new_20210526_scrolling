<?php
/* Smarty version 3.1.30, created on 2021-06-04 17:29:50
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tiger_nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60ba46ee25fb98_64043206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7ad59d4271d72feb563b1b653caa8069e37e192' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tiger_nav.tpl',
      1 => 1621958153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba46ee25fb98_64043206 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>  
  /* Menu */
  .menu {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
   background-color: ;
  }

  .menu li {
   float: left;
  }

  .menu li a {
   display: block;
   color: ;
   text-align: center;
   padding:;
   text-decoration: none;
  }

  .menu li ul{
   display: none;
  }

  .menu li a:hover {
   color: #000;
  }

  .active{
   color: #000;
   text-shadow: -1px 0px #000;
  }

</style>
<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light sticky-top" id="ftco-navbar">
  <div class="container">
    <!-- Brand/logo -->
      <a class="navbar-brand" href="#">
    <img src="" alt="logo" style="width:140px;">
      </a>
    <a class="navbar-brand" href="index.php">桃園考古遺址共同入口網站</a>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" wfd-id="843" aria-expanded="false">
    <span class="navbar-toggler-icon" wfd-id="813"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb" wfd-id="807">
      <ul class="navbar-nav menu ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="tiger.php">遺址簡介</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tiger_reason.php">遺址發掘原因</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tiger_action.php">一起考古去</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tiger_appearance.php">拼湊史前人的模樣</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tiger_more.php">更多遺址事</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tiger_toolbox.php">老師工具箱</button></a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <li class="nav-item ml-1"><a href="admin.php" class="btn btn-success">後台管理</a></li>
        <li class="nav-item ml-1">
          <a class="btn btn-warning" href="user.php?op=user_form">帳戶管理</a>
        </li>
        <li class="nav-item ml-1">
          <a class="btn btn-danger" href="user.php?op=user_logout">登出</a>
        </li>
      <?php } else { ?>    
      
      <?php }?>
      </ul>
    </div>
  </div>
</nav>

<?php echo '<script'; ?>
>

  $(document).ready(function() {

   // Get current page URL
   var url = window.location.href;

   // remove # from URL
   url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

   // remove parameters from URL
   url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

   // select file name
   url = url.substr(url.lastIndexOf("/") + 1);
   
   // If file name not avilable
   if(url == ''){
   url = 'index.php';
   }
   
   // Loop all menu items
   $('.menu li').each(function(){

    // select href
    var href = $(this).find('a').attr('href');
   
    // Check filename
    if(url == href){

     // Add active class
     $(this).addClass('active');
    }
   });
  }); 
  
<?php echo '</script'; ?>
> 
      
      


      <?php }
}
