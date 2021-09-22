<?php
/*  引入  */
require_once "header.php";
require_once "menu.php";
$page_title = '帳號';
/*  流程控制  */
$op      = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
$user_sn = isset($_REQUEST['user_sn']) ? my_filter($_REQUEST['user_sn'], "int") : 0;
$user_id = isset($_REQUEST['user_id']) ? my_filter($_REQUEST['user_id'], "string") : '';

switch ($op) {
    case 'user_form':
        user_form($user_sn);
        break;

    case 'insert_user':
        $user_sn = insert_user();
        header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
        exit;
        break;

    case 'update_user':
        update_user();
        header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
        exit;
        break;

    case 'delete_user':
        delete_user($user_sn);
        header("location:{$_SERVER['PHP_SELF']}");
        exit;
        break;

    case 'user_login':
        $login = user_login($user_id);
        if ($login) {
            header("location:{$_SERVER['PHP_SELF']}");
        } else {
            header("location:index.php");
        }
        exit;
        break;

    case 'user_logout':
        user_logout();
        header("location:index.php");
        exit;
        break;

    case 'display_user':
    default:
        $op = 'display_user';
        display_user($user_sn);
        break;

}

/*  輸出  */

$smarty->assign('page_title', $page_title);
require_once "footer_user.php";
/*  本檔案使用函數  */

//註冊會員表單
function user_form($user_sn)
{
    global $mysqli, $smarty;
    if (empty($user_sn)) {
        $sql    = "EXPLAIN `users`";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        while (list($field_name) = $result->fetch_row()) {
            $user[$field_name] = '';
        }
    } else {
        $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $user   = $result->fetch_assoc();
    }
    //var_dump($user);
    $smarty->assign('user', $user);
}

//儲存會員
function insert_user()
{
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $user_passwd = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`user_name`, `user_id`, `user_passwd`) VALUES ('{$user_name}' , '{$user_id}' , '{$user_passwd}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $user_sn             = $mysqli->insert_id;
    $_SESSION['user_sn'] = $user_sn;
    $_POST['user_sn']    = $user_sn;
    $_SESSION['user']    = $_POST;
    return $user_sn;
}

//觀看會員
function display_user($user_sn)
{
    global $mysqli, $smarty, $isAdmin, $isUser;
    if (empty($user_sn)) {
        $user_sn = $_SESSION['user_sn'];
    }
    if ($isUser) {
    $user_sn = $isAdmin ? $user_sn : $_SESSION['user_sn'];
    } else {
        die("<head>
              <title>非會員，請勿亂入。謝謝！</title>
              <meta charset='utf-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
              <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
              <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
              <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
            </head>
            <body>
            <div class='container'>
              <div class='jumbotron text-center mt-5'>
                <h1>非會員，請勿亂入。謝謝！</h1>      
                <p class='mt-3'>本網站目前尚未開放會員註冊，有興趣的網友請至首頁瀏覽網站訊息。謝謝您！</p>
              </div>      
            </div>
            </body>
            ");
    }
    $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    $smarty->assign('user', $user);

    $all_users = '';
    if ($isAdmin) {
        $sql       = "SELECT * FROM `users`";
        $result    = $mysqli->query($sql) or die($mysqli->connect_error);
        $all_users = $result->fetch_all(MYSQLI_ASSOC);
    }
    $smarty->assign('all_users', $all_users);
    $smarty->assign('now_user_sn', $user_sn);
}

//更新會員
function update_user()
{
    global $mysqli, $isAdmin, $isUser;

    foreach ($_POST as $var_title => $var_value) {
        $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    $passwd_update = '';
    if (!empty($_POST['user_passwd'])) {
        $user_passwd   = password_hash($_POST['user_passwd'], PASSWORD_DEFAULT);
        $passwd_update = ", `user_passwd` = '{$user_passwd}'";
    }
    if ($isUser) {
        $user_sn = $isAdmin ? $user_sn : $_SESSION['user_sn'];
    } else {
        return;
    }
    $sql = "UPDATE `users` SET
      `user_name` = '{$user_name}',
      `user_id` = '{$user_id}'
      {$passwd_update}
    WHERE `user_sn` = '{$user_sn}'";
    // die($sql);
    $mysqli->query($sql) or die($mysqli->connect_error);
}

//刪除會員
function delete_user($user_sn)
{
    global $mysqli, $isAdmin;

    if (!$isAdmin) {
        return;
    }
    $sql = "DELETE FROM `users` WHERE `user_sn` = '{$user_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}

//會員登入
function user_login($user_id)
{
    global $mysqli;
    if (empty($user_id)) {
        return false;
    }

    $sql    = "SELECT * FROM `users` WHERE `user_id`='{$user_id}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    if (!empty($user)) {
        if (password_verify($_POST['user_passwd'], $user['user_passwd'])) {
            $_SESSION['user_sn'] = $user['user_sn'];
            $_SESSION['user']    = $user;
            return true;
        }
    }
    return false;
}

//會員登出
function user_logout()
{
    unset($_SESSION['user_sn']);
    unset($_SESSION['user']);
}
