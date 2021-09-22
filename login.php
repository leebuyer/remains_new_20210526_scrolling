<?php
/*  引入  */
require_once "header.php";
$page_title = '登入';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$user_sn    = isset($_REQUEST['user_sn']) ? my_filter($_REQUEST['user_sn'], "int") : 0;

switch ($op) {
    
   		
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_login.php";

/*  本檔案使用函數  */
