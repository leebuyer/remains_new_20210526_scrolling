<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '首頁';

/*  流程控制  */
$sn = isset($_REQUEST['sn']) ? my_filter($_REQUEST['sn'], "int") : 0;
$op          = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
// $keyword = isset($_REQUEST['keyword']) ? my_filter($_REQUEST['keyword'], "string") : '';

switch ($op) {
    
        default:

        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
}

/*  輸出  */
$smarty->assign('page_title', $page_title);
$smarty->assign('navbar', $navbar);
require_once "footer.php";

/*  本檔案使用函數  */

//讀出所有文章
function list_article($sn = "")
{
    global $mysqli, $smarty;
    include_once "class/PageBar.php";
    // $where   = !empty($keyword) ? "where `title` like '%{$keyword}%' or `content` like '%{$keyword}%'" : "";

    $sql     = "SELECT * FROM `article` ORDER BY `update_time` DESC";
    $PageBar = getPageBar($sql, 6, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];
    $result  = $mysqli->query($sql) or die($mysqli->error);
    $all     = array();
    $i       = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['pic'] = get_article_pic($data['sn'], 'article');
        $all[$i]['img'] = get_article_img($data['sn'], 'images');
        $all[$i]['summary_title'] = mb_substr(strip_tags($data['title']), 0, 12);
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 30);
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
    $smarty->assign('bar', $bar);
    $smarty->assign('total', $total);
}


