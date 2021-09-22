<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$more_sn    = isset($_REQUEST['more_sn']) ? my_filter($_REQUEST['more_sn'], "int") : 0;

switch ($op) {
   

    default:
         if ($more_sn) {
            $op = 'tiger_more_show';
            tiger_more_show($more_sn);
        } else {
            $op = 'tiger_more';
            tiger_more();
        }
       
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);

require_once "footer_tiger.php";

/*  本檔案使用函數  */

//虎頭山公園更多遺址事
function tiger_more()
{
    global $mysqli, $smarty;

     include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `tiger_more` ORDER BY `tiger_more_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $all_tiger_more = array();
    $i = 0;
    while ($tiger_more = $result->fetch_assoc()) {
        $all_tiger_more[$i]        = $tiger_more;
        $all_tiger_more[$i]['pic'] = get_tiger_more_pic($tiger_more['more_sn'], 'thumbs');
        $i++;
    }
    $smarty->assign('all_tiger_more', $all_tiger_more);
    $smarty->assign('bar', $bar);
}


//虎頭山公園觀看單一遺址事
function tiger_more_show($more_sn = '')
{
    global $mysqli, $smarty;

    $sql          = "SELECT * FROM `tiger_more` WHERE `more_sn`='{$more_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $tiger_more        = $result->fetch_assoc();
    $tiger_more['pic'] = get_tiger_more_pic($more_sn);
    $smarty->assign('tiger_more', $tiger_more);
}


