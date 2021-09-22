<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$action_sn    = isset($_REQUEST['action_sn']) ? my_filter($_REQUEST['action_sn'], "int") : 0;

switch ($op) {
    
    	default: 
    	    $op = "tree_action";
            tree_action();                        
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tree.php";

/*  本檔案使用函數  */

//榕樹下一起考古去
function tree_action()
{
     global $mysqli, $smarty;
   
    $sql     = "SELECT * FROM `tree_action` ORDER BY `tree_action_date` DESC";
   
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $tree_action = $result->fetch_assoc(); 

    $smarty->assign('tree_action', $tree_action);
}

 