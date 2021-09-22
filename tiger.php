<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$tiger_sn    = isset($_REQUEST['tiger_sn']) ? my_filter($_REQUEST['tiger_sn'], "int") : 0;


switch ($op) {
    
   		
}
/*  輸出  */
$smarty->assign('page_title', $page_title);
$smarty->assign('navbar', $navbar);
require_once "footer_tiger.php";

/*  本檔案使用函數  */



