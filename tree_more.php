<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$more_sn    = isset($_REQUEST['more_sn']) ? my_filter($_REQUEST['more_sn'], "int") : 0;

switch ($op) {
    
 
   
    default:
         if ($more_sn) {
            $op = 'tree_more_show';
            tree_more_show($more_sn);
        } else {
            $op = 'tree_more';
            tree_more();
        }
       
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tree.php";

/*  本檔案使用函數  */


//榕樹下更多遺址事
function tree_more()
{
    global $mysqli, $smarty;

    include_once "class/PageBar.php";
    $sql     = "SELECT * FROM `tree_more` ORDER BY `tree_more_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $all_tree_more = array();
    $i = 0;
    while ($tree_more = $result->fetch_assoc()) {
        $all_tree_more[$i]        = $tree_more;
        $all_tree_more[$i]['pic'] = get_tree_more_pic($tree_more['more_sn'], 'thumbs');
        $i++;
    }

    $smarty->assign('all_tree_more', $all_tree_more);
    $smarty->assign('bar', $bar);
}



//榕樹下觀看單一遺址事
function tree_more_show($more_sn = '')
{
    global $mysqli, $smarty;

    $sql          = "SELECT * FROM `tree_more` WHERE `more_sn`='{$more_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $tree_more        = $result->fetch_assoc();
    $tree_more['pic'] = get_tree_more_pic($more_sn);
    $smarty->assign('tree_more', $tree_more);
}


