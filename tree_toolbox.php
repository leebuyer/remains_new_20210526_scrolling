<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下老師工具箱';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$toolbox_sn    = isset($_REQUEST['toolbox_sn']) ? my_filter($_REQUEST['toolbox_sn'], "int") : 0;

switch ($op) {
    
    
    default:
            $op = "tree_toolbox";
            tree_toolbox();
             
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tree.php";

/*  本檔案使用函數  */

//榕樹下老師工具箱
function tree_toolbox()
{
    global $mysqli, $smarty;

    include_once "class/PageBar.php";
   
    $sql     = "SELECT * FROM `tree_toolbox` ORDER BY `tree_toolbox_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $all_tree_toolbox = array();
    $i = 0;
    while ($tree_toolbox = $result->fetch_assoc()) {
        $all_tree_toolbox[$i] = $tree_toolbox;
        $all_tree_toolbox[$i]['summary_toolbox_title'] = mb_substr(strip_tags($tree_toolbox['toolbox_title']), 0, 15);//老師工具箱標題15字
        $all_tree_toolbox[$i]['summary_toolbox_introduction'] = mb_substr(strip_tags($tree_toolbox['toolbox_introduction']), 0, 20);//老師工具箱簡介20字
        $i++;
    }

    $smarty->assign('all_tree_toolbox', $all_tree_toolbox);
    $smarty->assign('bar', $bar);
}

 