<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下首頁';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$tree_sn    = isset($_REQUEST['tiger_sn']) ? my_filter($_REQUEST['tiger_sn'], "int") : 0;

switch ($op) {
    
   
    default:
    	$op = "tree_index";
        tree_index();
        
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tree.php";

/*  本檔案使用函數  */

//虎頭山公園一起考古去
function tree_index()
{
    global $mysqli, $smarty;
   
    $sql     = "SELECT * FROM `tree_index`";
   
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $tiger_action = $result->fetch_assoc();

    $smarty->assign('tree_index', $tree_index);
  
}

