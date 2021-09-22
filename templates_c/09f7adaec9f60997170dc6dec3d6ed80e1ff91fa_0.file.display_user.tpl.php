<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:51:26
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\display_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8ec6e5e51a0_14879841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f7adaec9f60997170dc6dec3d6ed80e1ff91fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\display_user.tpl',
      1 => 1621521165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8ec6e5e51a0_14879841 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>會員資料</h1>
<div class="row">
  <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
    <div class="col-md-2">
      <select size=10 class="form-control" onChange="location.href='user.php?user_sn='+this.value">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_users']->value, 'mem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mem']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['mem']->value['user_sn'];?>
" <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value == $_smarty_tpl->tpl_vars['mem']->value['user_sn']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mem']->value['user_name'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      }
      </select>
    </div>
  <?php }?>
  <div class="col-md-10">
    <table class="table table-hover table-bordered table-responsive">
        <tr>
          <td>姓名</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
        </tr>
        <tr>
          <td>帳號</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
        </tr>
    </table>
    <div class="text-center">
        <a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-primary">編輯帳號</a>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
          <?php echo '<script'; ?>
 src="class/bootstrap-sweetalert/sweet-alert.min.js"><?php echo '</script'; ?>
>
          <link rel="stylesheet" type="text/css" href="class/bootstrap-sweetalert/sweet-alert.css">
          <?php echo '<script'; ?>
 type="text/javascript">
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
          <?php echo '</script'; ?>
>
          <?php if ($_smarty_tpl->tpl_vars['now_user_sn']->value != $_smarty_tpl->tpl_vars['login_user']->value['user_sn']) {?>
              <a href="javascript:delete_user('<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
')" class="btn btn-danger">刪除帳號</a>
          <?php }?>
        <?php }?>
    </div>
  </div>
</div>
<?php }
}
