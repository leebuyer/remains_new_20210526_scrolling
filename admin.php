<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '後台編輯';
if (!$isAdmin) {
    header("location:index.php");
    exit;
}
 
/*  流程控制  */
$op       = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$sn = isset($_REQUEST['sn']) ? my_filter($_REQUEST['sn'], "int") : 0;
$reason_sn = isset($_REQUEST['reason_sn']) ? my_filter($_REQUEST['reason_sn'], "int") : 0;
$action_sn = isset($_REQUEST['action_sn']) ? my_filter($_REQUEST['action_sn'], "int") : 0;
$appearance_sn = isset($_REQUEST['appearance_sn']) ? my_filter($_REQUEST['appearance_sn'], "int") : 0;
$more_sn = isset($_REQUEST['more_sn']) ? my_filter($_REQUEST['more_sn'], "int") : 0;
$toolbox_sn = isset($_REQUEST['toolbox_sn']) ? my_filter($_REQUEST['toolbox_sn'], "int") : 0;

switch ($op) {

    //首頁文章
    case 'insert_article':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;

    case "article_form":
        article_form($sn);
        break;

    case "delete_article":
        delete_article($sn);
        header("location: index.php");
        exit;

        case 'update_article':
        update_article($sn);
        header("location: index.php?sn={$sn}");
        exit;
  
    //榕樹下
    case 'tree_reason_form':
        tree_reason_form($reason_sn);
        break;

    case 'update_tree_reason':
        update_tree_reason($reason_sn);
        header("location:tree_reason.php?reason_sn={$reason_sn}");
        exit;
        break;

    case 'delete_tree_reason':
        delete_tree_reason($reason_sn);
        header("location:tree_reason.php");
        exit;
        break;

    case 'insert_tree_reason':
        $reason_sn = insert_tree_reason();
        header("location:tree_reason.php?reason_sn={$reason_sn}");
        exit;
        break;

    case 'tree_action_fome':
        tree_action_fome($action_sn);
        break;

    case 'update_tree_action':
        update_tree_action($action_sn);
        header("location:tree_action.php?action_sn={$action_sn}");
        exit;
        break;

    case 'delete_tree_action':
        delete_tree_action($action_sn);
        header("location:tree_action.php");
        exit;
        break;

    case 'insert_tree_action':
        $action_sn = insert_tree_action();
        header("location:tree_action.php?action_sn={$action_sn}");
        exit;
        break;

    case 'tree_appearance_form':
        tree_appearance_form($appearance_sn);
        break;

    case 'update_tree_appearance':
        update_tree_appearance($appearance_sn);
        header("location:tree_appearance.php?appearance_sn={$appearance_sn}");
        exit;
        break;

    case 'delete_tree_appearance':
        delete_tree_appearance($appearance_sn);
        header("location:tree_appearance.php");
        exit;
        break;

    case 'insert_tree_appearance':
        $appearance_sn = insert_tree_appearance();
        header("location:tree_appearance.php?appearance_sn={$appearance_sn}");
        exit;
        break;

    case 'tree_more_form':
        tree_more_form($more_sn);
        break;

    case 'update_tree_more':
        update_tree_more($more_sn);
        header("location:tree_more.php?more_sn={$more_sn}");
        exit;
        break;

    case 'delete_tree_more':
        delete_tree_more($more_sn);
        header("location:tree_more.php");
        exit;
        break;

    case 'insert_tree_more':
        $more_sn = insert_tree_more();
        header("location:tree_more.php?more_sn={$more_sn}");
        exit;
        break;

    case 'tree_toolbox_form':
        tree_toolbox_form($toolbox_sn);
        break;

    case 'update_tree_toolbox':
        update_tree_toolbox($toolbox_sn);
        header("location:tree_toolbox.php?toolbox_sn={$toolbox_sn}");
        exit;
        break;

    case 'delete_tree_toolbox':
        delete_tree_toolbox($toolbox_sn);
        header("location:tree_toolbox.php");
        exit;
        break;

    case 'insert_tree_toolbox':
        $toolbox_sn = insert_tree_toolbox();
        header("location:tree_toolbox.php?toolbox_sn={$toolbox_sn}");
        exit;
        break;


    //虎頭山公園 
    case 'tiger_reason_form':
        tiger_reason_form($reason_sn);
        break;

    case 'update_tiger_reason':
        update_tiger_reason($reason_sn);
        header("location:tiger_reason.php?reason_sn={$reason_sn}");
        exit;
        break;

    case 'delete_tiger_reason':
        delete_tiger_reason($reason_sn);
        header("location:tiger_reason.php");
        exit;
        break;

    case 'insert_tiger_reason':
        $reason_sn = insert_tiger_reason();
        header("location:tiger_reason.php?reason_sn={$reason_sn}");
        exit;
        break;

    case 'tiger_action_fome':
        tiger_action_fome($action_sn);
        break;

    case 'update_tiger_action':
        update_tiger_action($action_sn);
        header("location:tiger_action.php?action_sn={$action_sn}");
        exit;
        break;

    case 'delete_tiger_action':
        delete_tiger_action($action_sn);
        header("location:tiger_action.php");
        exit;
        break;

    case 'insert_tiger_action':
        $action_sn = insert_tiger_action();
        header("location:tiger_action.php?action_sn={$action_sn}");
        exit;
        break;
    case 'tiger_appearance_form':
        tiger_appearance_form($appearance_sn);
        break;

    case 'update_tiger_appearance':
        update_tiger_appearance($appearance_sn);
        header("location:tiger_appearance.php?appearance_sn={$appearance_sn}");
        exit;
        break;

    case 'delete_tiger_appearance':
        delete_tiger_appearance($appearance_sn);
        header("location:tiger_appearance.php");
        exit;
        break;

    case 'insert_tiger_appearance':
        $appearance_sn = insert_tiger_appearance();
        header("location:tiger_appearance.php?appearance_sn={$appearance_sn}");
        exit;
        break;

    case 'tiger_more_form':
        tiger_more_form($more_sn);
        break;

    case 'update_tiger_more':
        update_tiger_more($more_sn);
        header("location:tiger_more.php?more_sn={$more_sn}");
        exit;
        break;

    case 'delete_tiger_more':
        delete_tiger_more($more_sn);
        header("location:tiger_more.php");
        exit;
        break;

    case 'insert_tiger_more':
        $more_sn = insert_tiger_more();
        header("location:tiger_more.php?more_sn={$more_sn}");
        exit;
        break;

    case 'tiger_toolbox_form':
        tiger_toolbox_form($toolbox_sn);
        break;

    case 'update_tiger_toolbox':
        update_tiger_toolbox($toolbox_sn);
        header("location:tiger_toolbox.php?toolbox_sn={$toolbox_sn}");
        exit;
        break;

    case 'delete_tiger_toolbox':
        delete_tiger_toolbox($toolbox_sn);
        header("location:tiger_toolbox.php");
        exit;
        break;

    case 'insert_tiger_toolbox':
        $toolbox_sn = insert_tiger_toolbox();
        header("location:tiger_toolbox.php?toolbox_sn={$toolbox_sn}");
        exit;
        break;

}

/*  輸出  */

$smarty->assign('navbar', $navbar);
$smarty->assign('page_title', $page_title);
require_once "footer_admin.php";

/*  本檔案使用函數  */
/*************************  首頁文章函數  ****************************/
//編輯文章表單
function article_form($sn)
{
    global $mysqli, $smarty;
    if (empty($sn)) {
        $sql    = "EXPLAIN `article`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $article[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `article` WHERE `sn`='{$sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $article        = $result->fetch_assoc();
        $article['pic'] = get_article_pic($sn, 'article');
    }
    $smarty->assign('article', $article);
}

//儲存文章
function insert_article()
{
    
    global $mysqli;
    $title    = $mysqli->real_escape_string($_POST['title']);
    $content  = $mysqli->real_escape_string($_POST['content']);

    $create_time = date("Y-m-d H:i:s");
    $sql      = "INSERT INTO `article` (`title`, `content`, `create_time`, `update_time`) VALUES ('{$title}', '{$content}', '{$create_time}', now())";
    $mysqli->query($sql) or die($mysqli->error);
    $sn = $mysqli->insert_id;

    save_article_pic($sn);

    return $sn;
}


//刪除文章
function delete_article($sn)
{
    global $mysqli;
    $sql = "DELETE FROM `article` WHERE `sn`='{$sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_article_pic($sn);
}


//刪除圖片
function delete_article_pic($sn)
{
    if (file_exists("uploads/article/{$sn}.png")) {
        unlink("uploads/article/{$sn}.png");
    }
    if (file_exists("uploads/img/{$sn}.png")) {
        unlink("uploads/img/{$sn}.png");
    }
    if (file_exists("uploads/images/{$sn}.png")) {
        unlink("uploads/images/{$sn}.png");
    }
}

//更新文章
function update_article($sn)
{
    global $mysqli;
    $title    = $mysqli->real_escape_string($_POST['title']);
    $content  = $mysqli->real_escape_string($_POST['content']);
    
    $sql = "UPDATE `article` SET 
    `title`='{$title}', 
    `content`= '{$content}',
    `update_time`=now()  
    WHERE sn='{$sn}'";

    $mysqli->query($sql) or die($mysqli->error);

     save_article_pic($sn);

    return $sn;
}


//儲存圖片
function save_article_pic($sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['article_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //大圖
        $pic->file_new_name_body = $sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 1920;
        $pic->image_y            = 880;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = t;
        $pic->Process('uploads/images/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //中圖
        $pic->file_new_name_body = $sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = t;
        $pic->Process('uploads/article/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = $sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 300;
        $pic->image_y            = 200;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = t;
        $pic->Process('uploads/img/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}

/*************************  榕樹下遺址函數  ****************************/

//編輯榕樹下遺址發掘原因表單
function tree_reason_form($reason_sn)
{
    global $mysqli, $smarty;
    if (empty($reason_sn)) {
        $sql    = "EXPLAIN `tree_reason`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tree_reason[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tree_reason` WHERE `reason_sn`='{$reason_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tree_reason        = $result->fetch_assoc();
  
    }
    $smarty->assign('tree_reason', $tree_reason);
}

//編輯榕樹下一起考古去表單
function tree_action_fome($action_sn)
{
    global $mysqli, $smarty;
    if (empty($action_sn)) {
        $sql    = "EXPLAIN `tree_action`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tree_action[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tree_action` WHERE `action_sn`='{$action_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tree_action        = $result->fetch_assoc();
        
    }
    $smarty->assign('tree_action', $tree_action);
}

//編輯榕樹下拼湊史前人的模樣表單
function tree_appearance_form($appearance_sn)
{
    global $mysqli, $smarty;
    if (empty($appearance_sn)) {
        $sql    = "EXPLAIN `tree_appearance`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tree_appearance[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tree_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tree_appearance        = $result->fetch_assoc();
        //$tree_appearance['pic'] = get_tree_appearance_pic($tree_sn, 'tree_appearance_thumbs');
        
    }
    $smarty->assign('tree_appearance', $tree_appearance);
}


//編輯榕樹下更多遺址事表單
function tree_more_form($more_sn)
{
    global $mysqli, $smarty;
    if (empty($more_sn)) {
        $sql    = "EXPLAIN `tree_more`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tree_more[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tree_more` WHERE `more_sn`='{$more_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tree_more        = $result->fetch_assoc();
        $tree_more['pic'] = get_tree_more_pic($more_sn, 'thumbs');
        
    }
    $smarty->assign('tree_more', $tree_more);
}


//編輯榕樹下老師工具箱表單
function tree_toolbox_form($toolbox_sn)
{
    global $mysqli, $smarty;
    if (empty($toolbox_sn)) {
        $sql    = "EXPLAIN `tree_toolbox`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tree_toolbox[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tree_toolbox` WHERE `toolbox_sn`='{$toolbox_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tree_toolbox        = $result->fetch_assoc();
             
    }
    $smarty->assign('tree_toolbox', $tree_toolbox);
}

//儲存榕樹下遺址發掘原因
function insert_tree_reason()
{
    global $mysqli;
    $reason_content    = $mysqli->real_escape_string($_POST['reason_content']);
    $tree_reason_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `tree_reason` (`reason_content`,`tree_reason_date`) VALUES ('{$reason_content}','{$tree_reason_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $reason_sn = $mysqli->insert_id;
    return $reason_sn;
}


//更新榕樹下遺址發掘原因
function update_tree_reason($reason_sn)
{
    global $mysqli;
    $reason_content    = $mysqli->real_escape_string($_POST['reason_content']);
    $tree_reason_date = date("Y-m-d H:i:s");
    $sql = "UPDATE `tree_reason` SET
    `reason_content`='{$reason_content}',
    `tree_reason_date`='{$tree_reason_date}'
    WHERE `reason_sn`='{$reason_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    
}

//刪除榕樹下遺址發掘原因
function delete_tree_reason($reason_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tree_reason` WHERE `reason_sn`='{$reason_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    
}


//儲存榕樹下遺址一起考古去
function insert_tree_action()
{
    global $mysqli;
    
    $action_content    = $mysqli->real_escape_string($_POST['action_content']);
    $tree_action_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `tree_action` (`action_content`,`tree_action_date`) VALUES ('{$action_content}','{$tree_action_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $action_sn = $mysqli->insert_id;
    return $action_sn;
}


//更新榕樹下遺址一起考古去
function update_tree_action($action_sn)
{
    global $mysqli;
    $action_content    = $mysqli->real_escape_string($_POST['action_content']);
    $tree_action_date = date("Y-m-d H:i:s");
    $sql = "UPDATE `tree_action` SET
    `action_content`='{$action_content}',
    `tree_action_date`='{$tree_action_date}'
    WHERE `action_sn`='{$action_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
   
}


//刪除榕樹下遺址一起考古去
function delete_tree_action($action_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tree_action` WHERE `action_sn`='{$action_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
   
}



//儲存榕樹下遺址拼湊史前人的模樣
function insert_tree_appearance()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tree_appearance_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tree_appearance` (`appearance_introduction`, `appearance_title`, `appearance_content`, `appearance_3d`, `tree_appearance_date`) VALUES ('{$appearance_introduction}', '{$appearance_title}', '{$appearance_content}', '{$appearance_3d}', '{$tree_appearance_date}')";
    // die($sql);
    $mysqli->query($sql) or die($mysqli->connect_error);
    $appearance_sn = $mysqli->insert_id;
    //save_tree_appearance_pic($appearance_sn);
    return $appearance_sn;
}


//更新榕樹下遺址拼湊史前人的模樣
function update_tree_appearance($appearance_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tree_appearance_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tree_appearance` SET
    `appearance_introduction`='{$appearance_introduction}',
    `appearance_title`='{$appearance_title}',
    `appearance_content`='{$appearance_content}',
    `appearance_3d`='{$appearance_3d}',
    `tree_appearance_date`='{$tree_appearance_date}'
    WHERE `appearance_sn`='{$appearance_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    //save_tree_appearance_pic($appearance_sn);
}

//刪除榕樹下遺址拼湊史前人的模樣
function delete_tree_appearance($appearance_sn = "")
{
    global $mysqli;
    $sql = "DELETE FROM `tree_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    //delete_tree_appearance_pic($appearance_sn);
}


//儲存榕樹下遺址更多遺址事
function insert_tree_more()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tree_more_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tree_more` (`more_introduction`, `more_title`, `more_content`, `tree_more_date`) VALUES ('{$more_introduction}', '{$more_title}', '{$more_content}', '{$tree_more_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $more_sn = $mysqli->insert_id;
    save_tree_more_pic($more_sn);
    return $more_sn;
}


//儲存榕樹下遺址更多遺址事圖片
function save_tree_more_pic($more_sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['tree_more_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //中圖
        $pic->file_new_name_body = "tree_more_" . $more_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 400;
        $pic->image_y            = 300;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/tree_more/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = "tree_more_" . $more_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 260;
        $pic->image_y            = 240;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}


//更新榕樹下遺址更多遺址事
function update_tree_more($more_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tree_more_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tree_more` SET
    `more_introduction`='{$more_introduction}',
    `more_title`='{$more_title}',
    `more_content`='{$more_content}',
    `tree_more_date`='{$tree_more_date}'
    WHERE `more_sn`='{$more_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_tree_more_pic($more_sn);
}


//刪除榕樹下遺址更多遺址事
function delete_tree_more($more_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tree_more` WHERE `more_sn`='{$more_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_tree_more_pic($more_sn);
}


//刪除榕樹下遺址更多遺址事圖片
function delete_tree_more_pic($more_sn = "")
{
    if (file_exists("uploads/tree_more/{$more_sn}.png")) {
        unlink("uploads/tree_more/{$more_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$more_sn}.png")) {
        unlink("uploads/thumbs/{$more_sn}.png");
    }
}


//儲存榕樹下遺址老師工具箱
function insert_tree_toolbox()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tree_toolbox_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tree_toolbox` (`toolbox_title`, `toolbox_introduction`, `toolbox_download`, `tree_toolbox_date`) VALUES ('{$toolbox_title}', '{$toolbox_introduction}', '{$toolbox_download}', '{$tree_toolbox_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $toolbox_sn = $mysqli->insert_id;
    return $toolbox_sn;
}

//更新榕樹下遺址老師工具箱
function update_tree_toolbox($toolbox_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tree_toolbox_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tree_toolbox` SET
    `toolbox_title`='{$toolbox_title}',
    `toolbox_introduction`='{$toolbox_introduction}',
    `toolbox_download`='{$toolbox_download}',
    `tree_toolbox_date`='{$tree_toolbox_date}'
    WHERE `toolbox_sn`='{$toolbox_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}

//刪除榕樹下遺址老師工具箱
function delete_tree_toolbox($toolbox_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tree_toolbox` WHERE `toolbox_sn`='{$toolbox_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}


/*************************  虎頭山公園遺址函數  ****************************/
//編輯虎頭山遺址發掘原因表單
function tiger_reason_form($reason_sn)
{
    global $mysqli, $smarty;
    if (empty($reason_sn)) {
        $sql    = "EXPLAIN `tiger_reason`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tiger_reason[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tiger_reason` WHERE `reason_sn`='{$reason_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tiger_reason        = $result->fetch_assoc();
  
    }
    $smarty->assign('tiger_reason', $tiger_reason);
}

//編輯虎頭山一起考古去表單
function tiger_action_fome($action_sn)
{
    global $mysqli, $smarty;
    if (empty($action_sn)) {
        $sql    = "EXPLAIN `tiger_action`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tiger_action[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tiger_action` WHERE `action_sn`='{$action_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tiger_action        = $result->fetch_assoc();
        
    }
    $smarty->assign('tiger_action', $tiger_action);
}

//編輯虎頭山拼湊史前人的模樣表單
function tiger_appearance_form($appearance_sn)
{
    global $mysqli, $smarty;
    if (empty($appearance_sn)) {
        $sql    = "EXPLAIN `tiger_appearance`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tiger_appearance[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tiger_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tiger_appearance        = $result->fetch_assoc();
        $tiger_appearance['pic'] = get_tiger_appearance_pic($appearance_sn, 'thumbs');
        
    }
    $smarty->assign('tiger_appearance', $tiger_appearance);
}


//編輯虎頭山更多遺址事表單
function tiger_more_form($more_sn)
{
    global $mysqli, $smarty;
    if (empty($more_sn)) {
        $sql    = "EXPLAIN `tiger_more`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tiger_more[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tiger_more` WHERE `more_sn`='{$more_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tiger_more        = $result->fetch_assoc();
        $tiger_more['pic'] = get_tiger_more_pic($more_sn, 'thumbs');
        
    }
    $smarty->assign('tiger_more', $tiger_more);
}


//編輯虎頭山老師工具箱表單
function tiger_toolbox_form($toolbox_sn)
{
    global $mysqli, $smarty;
    if (empty($toolbox_sn)) {
        $sql    = "EXPLAIN `tiger_toolbox`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $tiger_toolbox[$field_name] = '';
        }
    } else {
        $sql          = "SELECT * FROM `tiger_toolbox` WHERE `toolbox_sn`='{$toolbox_sn}'";
        $result       = $mysqli->query($sql) or die($mysqli->connect_error);
        $tiger_toolbox        = $result->fetch_assoc();        
    }
    $smarty->assign('tiger_toolbox', $tiger_toolbox);
}

//儲存虎頭山公園遺址發掘原因
function insert_tiger_reason()
{
    global $mysqli;
    $reason_content    = $mysqli->real_escape_string($_POST['reason_content']);
    $tiger_reason_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `tiger_reason` (`reason_content`,`tiger_reason_date`) VALUES ('{$reason_content}','{$tiger_reason_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $reason_sn = $mysqli->insert_id;
    return $reason_sn;
}


//更新虎頭山公園遺址發掘原因
function update_tiger_reason($reason_sn)
{
    global $mysqli;
    $reason_content    = $mysqli->real_escape_string($_POST['reason_content']);
    $tiger_reason_date = date("Y-m-d H:i:s");
    $sql = "UPDATE `tiger_reason` SET
    `reason_content`='{$reason_content}',
    `tiger_reason_date`='{$tiger_reason_date}'
    WHERE `reason_sn`='{$reason_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    
}

//刪除虎頭山公園遺址發掘原因
function delete_tiger_reason($reason_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tiger_reason` WHERE `reason_sn`='{$reason_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    
}


//儲存虎頭山公園遺址一起考古去
function insert_tiger_action()
{
    global $mysqli;
    $action_content    = $mysqli->real_escape_string($_POST['action_content']);
    $tiger_action_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `tiger_action` (`action_content`,`tiger_action_date`) VALUES ('{$action_content}','{$tiger_action_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $action_sn = $mysqli->insert_id;
    return $action_sn;
}


//更新虎頭山公園遺址一起考古去
function update_tiger_action($action_sn)
{
    global $mysqli;
    $action_content    = $mysqli->real_escape_string($_POST['action_content']);
    $tiger_action_date = date("Y-m-d H:i:s");
    $sql = "UPDATE `tiger_action` SET
    `action_content`='{$action_content}',
    `tiger_action_date`='{$tiger_action_date}'
    WHERE `action_sn`='{$action_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
   
}


//刪除虎頭山公園遺址一起考古去
function delete_tiger_action($action_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tiger_action` WHERE `action_sn`='{$action_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    
}

//儲存虎頭山公園遺址拼湊史前人的模樣
function insert_tiger_appearance()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tiger_appearance_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tiger_appearance` (`appearance_introduction`, `appearance_title`, `appearance_content`, `appearance_3d`, `tiger_appearance_date`) VALUES ('{$appearance_introduction}', '{$appearance_title}', '{$appearance_content}', '{$appearance_3d}', '{$tiger_appearance_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $appearance_sn = $mysqli->insert_id;
    save_tiger_appearance_pic($appearance_sn);
    return $appearance_sn;
}


//儲存虎頭山公園遺址拼湊史前人的模樣圖片
function save_tiger_appearance_pic($appearance_sn)
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['tiger_appearance_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //中圖
        $pic->file_new_name_body = "tiger_appearance_" . $appearance_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 400;
        $pic->image_y            = 300;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/tiger_appearance/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = "tiger_appearance_" . $appearance_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 260;
        $pic->image_y            = 240;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}


//更新虎頭山公園遺址拼湊史前人的模樣
function update_tiger_appearance($appearance_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tiger_appearance_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tiger_appearance` SET
    `appearance_introduction`='{$appearance_introduction}',
    `appearance_title`='{$appearance_title}',
    `appearance_content`='{$appearance_content}',
    `appearance_3d`='{$appearance_3d}',
    `tiger_appearance_date`='{$tiger_appearance_date}'
    WHERE `appearance_sn`='{$appearance_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_tiger_appearance_pic($appearance_sn);
}


//刪除虎頭山公園遺址拼湊史前人的模樣
function delete_tiger_appearance($appearance_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tiger_appearance` WHERE `appearance_sn`='{$appearance_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_tiger_appearance_pic($appearance_sn);
}


//刪除虎頭山公園遺址拼湊史前人的模樣圖片
function delete_tiger_appearance_pic($appearance_sn = "")
{
    if (file_exists("uploads/tiger_appearance/{$appearance_sn}.png")) {
        unlink("uploads/tiger_appearance/{$appearance_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$appearance_sn}.png")) {
        unlink("uploads/thumbs/{$appearance_sn}.png");
    }
}


//儲存虎頭山公園遺址更多遺址事
function insert_tiger_more()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tiger_more_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tiger_more` (`more_introduction`, `more_title`, `more_content`, `tiger_more_date`) VALUES ('{$more_introduction}', '{$more_title}', '{$more_content}', '{$tiger_more_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $more_sn = $mysqli->insert_id;
    save_tiger_more_pic($more_sn);
    return $more_sn;
}


//儲存虎頭山公園遺址更多遺址事圖片
function save_tiger_more_pic($more_sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['tiger_more_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //中圖
        $pic->file_new_name_body = "tiger_more_" . $more_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 400;
        $pic->image_y            = 300;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/tiger_more/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = "tiger_more_" . $more_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 260;
        $pic->image_y            = 240;
        $pic->image_frame            = 2 ; 
        $pic->image_frame_colors     = '#FFFFFF # BBBBBB ＃999999＃FF0000';
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}


//更新虎頭山公園遺址更多遺址事
function update_tiger_more($more_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tiger_more_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tiger_more` SET
    `more_introduction`='{$more_introduction}',
    `more_title`='{$more_title}',
    `more_content`='{$more_content}',
    `tiger_more_date`='{$tiger_more_date}'
    WHERE `more_sn`='{$more_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    save_tiger_more_pic($more_sn);
}

//刪除虎頭山公園遺址更多遺址事
function delete_tiger_more($more_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tiger_more` WHERE `more_sn`='{$more_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    delete_tiger_more_pic($more_sn);
}


//刪除虎頭山公園遺址更多遺址事圖片
function delete_tiger_more_pic($more_sn = "")
{
    if (file_exists("uploads/tiger_more/{$more_sn}.png")) {
        unlink("uploads/tiger_more/{$more_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$more_sn}.png")) {
        unlink("uploads/thumbs/{$more_sn}.png");
    }
}

//儲存虎頭山公園遺址老師工具箱
function insert_tiger_toolbox()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $tiger_toolbox_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `tiger_toolbox` (`toolbox_title`, `toolbox_introduction`, `toolbox_download`, `tiger_toolbox_date`) VALUES ('{$toolbox_title}', '{$toolbox_introduction}', '{$toolbox_download}', '{$tiger_toolbox_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $toolbox_sn = $mysqli->insert_id;
    return $toolbox_sn;
}

//更新虎頭山公園遺址老師工具箱
function update_tiger_toolbox($toolbox_sn)
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }

    $tiger_toolbox_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `tiger_toolbox` SET
    `toolbox_title`='{$toolbox_title}',
    `toolbox_introduction`='{$toolbox_introduction}',
    `toolbox_download`='{$toolbox_download}',
    `tiger_toolbox_date`='{$tiger_toolbox_date}'
    WHERE `toolbox_sn`='{$toolbox_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}

//刪除虎頭山公園遺址老師工具箱
function delete_tiger_toolbox($toolbox_sn)
{
    global $mysqli;
    $sql = "DELETE FROM `tiger_toolbox` WHERE `toolbox_sn`='{$toolbox_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}


//建立目錄(若需要的話...........!)
function mk_dir($dir = "")
{
    //若無目錄名稱秀出警告訊息
    if (empty($dir)) {
        die("沒有目錄名稱！");
    }

    //若目錄不存在的話建立目錄
    if (!is_dir($dir)) {
        umask(000);
        //若建立失敗秀出警告訊息
        if (!mkdir($dir, 0777)) {
            die("無法創建目錄！");
        }

    }
}

