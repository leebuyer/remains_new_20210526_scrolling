<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '榕樹下考古遺址';

/*  流程控制  */
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$appearance_sn    = isset($_REQUEST['appearance_sn']) ? my_filter($_REQUEST['appearance_sn'], "int") : 0;

switch ($op) {
    
   
    default:
         if ($appearance_sn) {
            $op = 'tree_appearance_show';
            tree_appearance_show($appearance_sn);
        } else {
            $op = 'tree_appearance';
            tree_appearance();
        }
       
        break;
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
require_once "footer_tree.php";

/*  本檔案使用函數  */

//虎頭山公園拼湊史前人的模樣
function tree_appearance()
{
    global $mysqli, $smarty;

    include_once "class/PageBar.php";

    $sql     = "SELECT * FROM `tree_appearance` ORDER BY `tree_appearance_date` desc";
    $PageBar = getPageBar($sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);

    $all_tree_appearance = array();
    $i = 0;
    while ($tree_appearance = $result->fetch_assoc()) {
        $all_tree_appearance[$i]        = $tree_appearance;
        //$all_tree_appearance[$i]['pic'] = get_tree_appearance_pic($tree_appearance['appearance_sn'], 'thumbs');
        $i++;
    }

    $smarty->assign('all_tree_appearance', $all_tree_appearance);
    $smarty->assign('bar', $bar);
}


//虎頭山公園觀看單一拼湊史前人的模樣
function tree_appearance_show($appearance_sn = '')
{
    global $mysqli, $smarty;
  
    $sql          = "SELECT * FROM `tree_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
    $result       = $mysqli->query($sql) or die($mysqli->connect_error);
    $tree_appearance        = $result->fetch_assoc();
    //$tree_appearance['pic'] = get_tree_appearance_pic($tree_appearance_sn);
    $smarty->assign('tree_appearance', $tree_appearance);
}

