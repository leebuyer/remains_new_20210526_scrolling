<?php
/* Smarty version 3.1.30, created on 2021-06-04 17:30:55
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tiger_more_show.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60ba472fc2f0e9_41073220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38723ade9d472c276d72c96dcbc72fb2e6cbd3c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tiger_more_show.tpl',
      1 => 1621613854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba472fc2f0e9_41073220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
.zoom:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3);
  z-index:1; 
}
</style>
<div class="container mt-3">
  <div class="alert bg-light alert-dismissible fade show">
  <button type="button" class="close close-alert" data-dismiss="modal">&times;</button>
    <div class="row">
      <div class="col-md-4">
        <h2 class="mb-3 text-center">拼湊史前人的模樣</h2>
      </div>
      <div class="col-md-4">
        <!-- AddToAny BEGIN.https://www.addtoany.com/ 點擊「Get the button code for」選擇「Any site」，然後點擊Choose Services…設定需要的服務，其中有PDF功能的為printfriendly，點擊「Get Button Code」複製語法，並貼到樣板檔即可。-->
        <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
          <a class="a2a_button_facebook"></a>
          <a class="a2a_button_twitter"></a>
          <a class="a2a_button_linkedin"></a>
          <a class="a2a_button_line"></a>
          <a class="a2a_button_print"></a>
          <a class="a2a_button_printfriendly"></a>
        </div>
      <?php echo '<script'; ?>
 async src="https://static.addtoany.com/menu/page.js"><?php echo '</script'; ?>
>
      <!-- AddToAny END -->
      </div>
      <div class="col-md-4 fontResizer">            
        <a class="" style="font-size:16px;border:0;width:5em;cursor:default;">文字大小：</a>
        <a href="javascript:void(0);" class="smallFont">小</a>
        <a href="javascript:void(0);" class="medFont">中</a>
        <a href="javascript:void(0);" class="largeFont">大</a>         
      </div>       
    </div>
    <div class="row">
      <div class="col-sm-6">
        <img src="<?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['more_title'];?>
" class="img-thumbnail img-fluid zoom">  
      </div>
      <div class="col-sm-6">
        <div class="alert alert-secondary">
          <h3 class="fontsizebox"><?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['more_title'];?>
</h3>
        </div>
        <div class="alert alert-secondary">
          <h3 class="text-justify fontsizebox"><?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['more_content'];?>
</h3>
        </div>
        <div>
        <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
          <a href="admin.php?op=tiger_more_form&more_sn=<?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['more_sn'];?>
" class="btn btn-warning">編輯文章</a>
          <a href="admin.php?op=delete_tiger_more&more_sn=<?php echo $_smarty_tpl->tpl_vars['tiger_more']->value['more_sn'];?>
" class="btn btn-danger">刪除文章</a>
        <?php }?>
      </div>
      </div>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
>
  $(document).ready(()=>{
    $('.close-alert').click(()=>{
      history.back();
    });
  });
<?php echo '</script'; ?>
>


<!-- 內文文字大小script -->
<?php echo '<script'; ?>
 type="text/javascript" src="js/fontsize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        fontResizer('1.2rem', '1.5rem', '2rem');
    });
<?php echo '</script'; ?>
>
<?php }
}
