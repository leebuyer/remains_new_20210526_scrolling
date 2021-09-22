<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <title>管理員登入表單</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style type="text/css">
    .container{
          border:2px solid;
          border-radius:2em;
          box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;  
    }
    #body{
          background:url( 'images/bg.jpg' );
        　background-repeat:repeat;
    }
  </style>
</head>
<body id="body">
<div class="container bg-light mt-5">
  <h3 class="text-center">桃園考古遺址管理員登入</h3>
  <form action="user.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">帳號</label>
      <input type="text" class="form-control" name="user_id" id="user_id" placeholder="請輸入帳號" name="uname" required>
    </div>
    <div class="form-group">
      <label for="pwd">密碼</label>
      <input type="password" class="form-control" name="user_passwd" id="user_passwd" placeholder="請輸入密碼" name="pswd" required>
    </div>
    <input type="hidden" name="op" value="user_login">
    <button type="submit" name="button" class="btn btn-primary btn-block mb-3">登入</button>
  </form>
</div>

</body>
</html>
