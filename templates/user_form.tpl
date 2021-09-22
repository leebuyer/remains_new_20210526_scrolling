<h1 class=" font-weight-bold">會員註冊</h1>
<script src="class/jQuery-Validation-Engine/js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"></script>
<script src="class/jQuery-Validation-Engine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="class/jQuery-Validation-Engine/css/validationEngine.jquery.css" type="text/css"/>

<script type="text/javascript">
    $(document).ready(function() {
      $("#user_form").validationEngine();
    });
</script>

{if !$isAdmin}
  <div class="alert alert-danger text-center">
    <h2><strong>非常抱歉，本網站尚未開放註冊！</strong></h2><a href="index.php"><button type="button" class="btn btn-warning mt-3">回首頁</button></a>
  </div>
{else}

<form action="user.php" id="user_form" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="col-md-2 control-label" for="user_name">姓名：</label>
    <div class="col-md-10">
      <input type="text" class="form-control validate[required]" name="user_name" id="user_name" placeholder="請輸入姓名" value="{$user.user_name}">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label" for="user_id">帳號：</label>
    <div class="col-md-10">
      <input type="text" class="form-control validate[required]" name="user_id" id="user_id" placeholder="請輸入帳號" value="{$user.user_id}">
    </div>
    <label class="col-md-2 control-label" for="user_passwd">密碼：</label>
      <div class="col-md-4 has-error">
        <input type="text" class="form-control {if $user.user_passwd==''}validate[required]{/if}" name="user_passwd" id="user_passwd" placeholder="{if $user.user_passwd}需要改密碼才填寫{else}請輸入密碼{/if}">
      </div>
  </div>

  <div class="form-group">
    <div class="col-md-6">
      {if $user.user_sn > 0}
        <input type="hidden" name="op" value="update_user">
        <input type="hidden" name="user_sn" value="{$user.user_sn}">
      {else}
        <input type="hidden" name="op" value="insert_user">
      {/if}
      <button type="submit" class="btn btn-primary">儲存</button>
    </div>
  </div>
</form>
{/if}

<script src="js/signup.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
