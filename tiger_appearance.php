<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '虎頭山公園考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$appearance_sn    = isset($_REQUEST['appearance_sn']) ? my_filter($_REQUEST['appearance_sn'], "int") : 0;

switch ($op) {
    
        
    default:
         if ($appearance_sn) {
            $op = 'tiger_appearance_show';
            tiger_appearance_show($appearance_sn);
        } else {
            $op = 'tiger_appearance';
            tiger_appearance();
        }
       
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tiger.php";

/*  本檔案使用函數  */

//虎頭山拼湊史前人的模樣
function tiger_appearance()
{
    global $mysqli, $smarty;

    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `tiger_appearance` ORDER BY `tiger_appearance_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

     $all_tiger_appearance = array();
    $i = 0;
    while ($tiger_appearance = $result->fetch_assoc()) {
        $all_tiger_appearance[$i]        = $tiger_appearance;
        $all_tiger_appearance[$i]['pic'] = get_tiger_appearance_pic($tiger_appearance['appearance_sn'], 'thumbs');
        $i++;
    }

    $smarty->assign('all_tiger_appearance', $all_tiger_appearance);
    $smarty->assign('bar', $bar);
}


//虎頭山觀看單一拼湊史前人的模樣
function tiger_appearance_show($appearance_sn = '')
{
    global $mysqli, $smarty;
  
    $sql          = "SELECT * FROM `tiger_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $tiger_appearance        = $result->fetch_assoc();
    $tiger_appearance['pic'] = get_tiger_appearance_pic($appearance_sn);
    $smarty->assign('tiger_appearance', $tiger_appearance);
}


