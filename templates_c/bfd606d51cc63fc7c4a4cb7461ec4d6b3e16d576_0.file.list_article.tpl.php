<?php
/* Smarty version 3.1.30, created on 2021-06-03 18:08:15
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8fe6f72c9c3_81802702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd606d51cc63fc7c4a4cb7461ec4d6b3e16d576' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\list_article.tpl',
      1 => 1622736489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scrolling.tpl' => 1,
  ),
),false)) {
function content_60b8fe6f72c9c3_81802702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-4">
    <?php $_smarty_tpl->_subTemplateRender("file:scrolling.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div> 
  <div class="col-md-8">
    <table class="table table-responsive table-hover fontsizebox">
      <thead class="">
        <tr class="row text-center p-1">
          <?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value) {?>
            <th class="col-sm-2">圖片</th>
            <th class="col-sm-2">標題</th>
            <th class="col-sm-5">內容</th>
            <th class="col-sm-3">時間</th>
          <?php } else { ?>
            <th class="col-sm-2">圖片</th>
            <th class="col-sm-2">標題</th>
            <th class="col-sm-4">內容</th>
            <th class="col-sm-2">時間</th>
            <th class="col-sm-2">功能</th>
          <?php }?>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
          <tr class="row p-1">
            <?php if (!$_smarty_tpl->tpl_vars['isAdmin']->value) {?>
              <td class="col-sm-2"><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-thumbnail img-fluid"></a></td>
              <td class="col-sm-2"><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary_title'];?>
</a></td>
              <td class="col-sm-5"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</td>
              <td class="col-sm-3"><?php echo $_smarty_tpl->tpl_vars['article']->value['create_time'];?>
</td>
            <?php } else { ?>
              <td class="col-sm-2"><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-thumbnail img-fluid"></a></td>
              <td class="col-sm-2"><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary_title'];?>
</a></td>
              <td class="col-sm-4"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</td>
              <td class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['article']->value['create_time'];?>
</td>
              <td class="col-sm-2">
                <button class="btn btn-primary my-1"><a href="admin.php?op=article_form&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="text-white">編輯</a></button>
                <button class="btn btn-danger my-1"><a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="text-white">刪除</a></button>
              </td>
            <?php }?>
          </tr> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody> 
    </table>
 </div>
</div> 
<?php echo $_smarty_tpl->tpl_vars['bar']->value;?>



 <?php }
}
