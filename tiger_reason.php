<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$reason_sn    = isset($_REQUEST['reason_sn']) ? my_filter($_REQUEST['reason_sn'], "int") : 0;

switch ($op) {
    
    default:
            $op = "tiger_reason";
            tiger_reason();
            
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);

require_once "footer_tiger.php";

/*  本檔案使用函數  */

//虎頭山公園遺址發掘原因
function tiger_reason()
{
    global $mysqli, $smarty;
   
    $sql     = "SELECT * FROM `tiger_reason`";
   
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $tiger_reason = $result->fetch_assoc();

    $smarty->assign('tiger_reason', $tiger_reason);
}

		