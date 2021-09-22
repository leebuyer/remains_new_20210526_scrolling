<?php
//可根據指定資料類型來過濾變數
function my_filter($var, $type = "int")
{
    switch ($type) {
        case 'string':
            //$var = isset($var) ? filter_var($var, FILTER_SANITIZE_ADD_SLASHES) : '';//適用於php8以上
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES) : '';
            break;
        case 'int':
        default:
            $var = isset($var) ? filter_var($var, FILTER_SANITIZE_NUMBER_INT) : '';
            break;
    }

    return $var;
}


//取得文章圖片
function get_article_pic($sn = '', $type = "article")
{
    $filename = "uploads/{$type}/{$sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "300x200" : "600x400";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無照片";
    }
}


//取得輪播圖片
function get_article_img($sn = '', $type = "images")
{
    $filename = "uploads/{$type}/{$sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "600x400" : "1920x880";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無輪播";
    }
}


//取得榕樹下更多遺址事圖片
function get_tree_more_pic($more_sn = '', $type = "tree_more")
{
    $filename = "uploads/{$type}/tree_more_{$more_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "260x240" : "400x300";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無照片";
    }
}

//取得虎頭山拼湊史前人的模樣圖片
function get_tiger_appearance_pic($appearance_sn = '', $type = "tiger_appearance")
{
    $filename = "uploads/{$type}/tiger_appearance_{$appearance_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "260x240" : "400x300";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無照片";
    }
}


//取得虎頭山更多遺址事圖片
function get_tiger_more_pic($more_sn = '', $type = "tiger_more")
{
    $filename = "uploads/{$type}/tiger_more_{$more_sn}.png";
    if (file_exists($filename)) {
        return $filename;
    } else {
        $size = ($type == 'thumbs') ? "260x240" : "400x300";
        return "http://dummyimage.com/{$size}/889dd1/ffffff.gif&text=無照片";
    }
}

//讀出單一文章
function show_article($sn)
{
    global $mysqli, $smarty;

    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $mysqli->query($sql) or die($mysqli->error);
    $data = $result->fetch_assoc();
    $data['title'] = $purifier->purify($data['title']);
    $data['content'] = $purifier->purify($data['content']);
    $data['pic'] = get_article_pic($sn, 'article');
    $smarty->assign('article', $data);

    //上一筆
    $sql = "SELECT * FROM `article` WHERE `create_time` > '{$data['create_time']}' ORDER BY `create_time` LIMIT 0,1";
    $result = $mysqli->query($sql) or die($mysqli->error);
    $previous = $result->fetch_assoc();
    $previous['title'] = mb_substr($previous['title'], 0, 16) . '...';
    $smarty->assign('previous', $previous);

    //下一筆
    $sql = "SELECT * FROM `article` WHERE `create_time` < '{$data['create_time']}' ORDER BY `create_time` DESC LIMIT 0,1";
    $result = $mysqli->query($sql) or die($mysqli->error);
    $next = $result->fetch_assoc();
    $next['title'] = mb_substr($next['title'], 0, 16) . '...';
    $smarty->assign('next', $next);
}

