<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:52:59
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8eccbb88a69_01230653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285ec16750ff722970f71119d4125368e6ddadc0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\article_form.tpl',
      1 => 1622648295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8eccbb88a69_01230653 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">
 
<?php echo '<script'; ?>
 src="class/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<form action="admin.php" method="post" enctype="multipart/form-data" class="my-4" id="myform">

    <div class=" form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="article_pic" id="article_pic" placeholder="請上傳一張封面圖">
        <?php if (isset($_smarty_tpl->tpl_vars['article']->value['pic'])) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
        <?php }?>
    </div>
    <div class="text-center">
        <?php if (isset($_smarty_tpl->tpl_vars['article']->value['sn']) && $_smarty_tpl->tpl_vars['article']->value['sn'] > 0) {?>
            <input type="hidden" name="op" value="update_article">
            <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
        <?php } else { ?>
            <input type="hidden" name="op" value="insert_article">
        <?php }?>
            <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>
 
<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');
<?php echo '</script'; ?>
>
<?php }
}
