<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$reason_sn    = isset($_REQUEST['reason_sn']) ? my_filter($_REQUEST['reason_sn'], "int") : 0;

switch ($op) {
   
    default:
    		$op = "tree_reason";
        	tree_reason();
         	
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);

require_once "footer_tree.php";

/*  本檔案使用函數  */

//榕樹下遺址發掘原因
function tree_reason()
{
    global $mysqli, $smarty;
   
    $sql     = "SELECT * FROM `tree_reason`";
   
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $tree_reason = $result->fetch_assoc();

    $smarty->assign('tree_reason', $tree_reason);
}

