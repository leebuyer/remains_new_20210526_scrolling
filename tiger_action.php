<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園一起考古去';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$tiger_sn    = isset($_REQUEST['tiger_sn']) ? my_filter($_REQUEST['tiger_sn'], "int") : 0;

switch ($op) {
    
   
    default:
    	$op = "tiger_action";
        tiger_action();
        
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tiger.php";

/*  本檔案使用函數  */

//虎頭山公園一起考古去
function tiger_action()
{
    global $mysqli, $smarty;
   
    $sql     = "SELECT * FROM `tiger_action` ORDER BY `tiger_action_date` DESC";
   
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $tiger_action = $result->fetch_assoc();

    $smarty->assign('tiger_action', $tiger_action);
  
}

