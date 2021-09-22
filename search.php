<?php
require_once 'header.php';
require_once "menu.php";
$page_title = '搜尋';

// die(var_dump($_SESSION));

$op      = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$keyword = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword']) : '';

/*************控制器**************/

switch ($op) {

    default:
        search_article($keyword);
        $op = 'search_article';
        break;
}

require_once 'footer.php';

/*************函數區**************/

//搜尋所有文章
function search_article($keyword = '')
{
    global $mysqli, $smarty;

    if ($keyword) {
        $keys = explode(' ', $keyword);
    } else {
        header('location:index.php');
        exit;
    }

    $key_array = array();
    foreach ($keys as $value) {
        if ($value != '') {
            $key_array[] = "(a.`title` LIKE '%{$value}%' OR a.`content` LIKE '%{$value}%')";
        }
    }

    if (empty($key_array)) {
        header('location:index.php');
        exit;
    }

    $search_str = implode(' or ', $key_array);

    $sql = "SELECT * FROM `article`
    WHERE $search_str ORDER BY `update_time` DESC ";

    include_once "class/PageBar.php";
    $PageBar = getPageBar($mysqli, $sql, 3, 10);
    $bar     = $PageBar['bar'];
    $sql     = $PageBar['sql'];
    $total   = $PageBar['total'];

    $result = $mysqli->query($sql) or die($mysqli->error);
    $all    = array();
    $i      = 0;
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        $i++;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);
    $smarty->assign('bar', $bar);
    $smarty->assign('total', $total);

}
