<h1>會員資料</h1>
<div class="row">
  {if $isAdmin}
    <div class="col-md-2">
      <select size=10 class="form-control" onChange="location.href='user.php?user_sn='+this.value">
        {foreach from=$all_users item=mem}
          <option value="{$mem.user_sn}" {if $now_user_sn==$mem.user_sn}selected{/if}>{$mem.user_name}</option>
        {/foreach}
      }
      </select>
    </div>
  {/if}
  <div class="col-md-10">
    <table class="table table-hover table-bordered table-responsive">
        <tr>
          <td>姓名</td><td>{$user.user_name}</td>
        </tr>
        <tr>
          <td>帳號</td><td>{$user.user_id}</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="user.php?op=user_form&user_sn={$user.user_sn}" class="btn btn-primary">編輯帳號</a>
        {if $isAdmin}
          <script src="class/bootstrap-sweetalert/sweet-alert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
          <script type="text/javascript">
            function delete_user(user_sn){
              swal({
                title: "確定要刪除嗎？",
                text: "刪掉之後，該會員所有資料會消失喔!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "是！我要刪了它！",
                closeOnConfirm: false
                },
                function(){
                location.href='user.php?op=delete_user&user_sn=' + user_sn;
                swal("好啦！刪完了！", "後悔也來不及了。", "success");
              });
            }
          </script>
          {if $now_user_sn!=$login_user.user_sn}
              <a href="javascript:delete_user('{$user.user_sn}')" class="btn btn-danger">刪除帳號</a>
          {/if}
        {/if}
    </div>
  </div>
</div>
