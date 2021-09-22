<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$toolbox_sn    = isset($_REQUEST['toolbox_sn']) ? my_filter($_REQUEST['toolbox_sn'], "int") : 0;

switch ($op) {
    
    
    default:
            $op = "tiger_toolbox";
            tiger_toolbox();
          
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tiger.php";

/*  本檔案使用函數  */

//虎頭山公園老師工具箱
function tiger_toolbox()
{
     global $mysqli, $smarty;

    include_once "class/PageBar.php";
   
    $sql     = "SELECT * FROM `tiger_toolbox` ORDER BY `tiger_toolbox_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $all_tiger_toolbox = array();
    $i = 0;
    while ($tiger_toolbox = $result->fetch_assoc()) {
        $all_tiger_toolbox[$i] = $tiger_toolbox;
        $all_tiger_toolbox[$i]['summary_toolbox_title'] = mb_substr(strip_tags($tiger_toolbox['toolbox_title']), 0, 15);//老師工具箱標題15字
        $all_tiger_toolbox[$i]['summary_toolbox_introduction'] = mb_substr(strip_tags($tiger_toolbox['toolbox_introduction']), 0, 20);//老師工具箱簡介20字
        $i++;
    }

    $smarty->assign('all_tiger_toolbox', $all_tiger_toolbox);
    $smarty->assign('bar', $bar);
}

