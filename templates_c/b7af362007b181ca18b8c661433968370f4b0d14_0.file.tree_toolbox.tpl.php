<?php
/* Smarty version 3.1.30, created on 2021-06-05 20:20:46
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tree_toolbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bbc07e014487_26956816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7af362007b181ca18b8c661433968370f4b0d14' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tree_toolbox.tpl',
      1 => 1621521151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bbc07e014487_26956816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="mb-3 text-center">老師工具箱</h2>
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
    <div class="col-md-4 class="fontResizer"">            
      <a class="" style="font-size:16px;border:0;width:5em;cursor:default;">文字大小：</a>
      <a href="javascript:void(0);" class="smallFont">小</a>
      <a href="javascript:void(0);" class="medFont">中</a>
      <a href="javascript:void(0);" class="largeFont">大</a>         
    </div> 
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-responsive-lg table-hover">
        <thead class="thead-light">
          <tr class="row text-center p-1">
            <th class="col">標題</th>
            <th class="col">簡介</th>
            <th class="col">下載</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tree_toolbox']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
          <tr class="row p-1">
            <td class="col fontsizebox"><?php echo $_smarty_tpl->tpl_vars['contact']->value['summary_toolbox_title'];?>
</td>
            <td class="col fontsizebox"><?php echo $_smarty_tpl->tpl_vars['contact']->value['summary_toolbox_introduction'];?>
</td> 
            <td class="col fontsizebox text-right">
              <a href="<?php echo $_smarty_tpl->tpl_vars['contact']->value['toolbox_download'];?>
" class="btn btn-info">下載</a>  
              <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                <a href="admin.php?op=delete_tree_toolbox&toolbox_sn=<?php echo $_smarty_tpl->tpl_vars['contact']->value['toolbox_sn'];?>
" class="btn btn-danger">刪除</a>
              <?php }?> 
            </td>
          </tr>
        </tbody>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </table>
    <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

    </div>
  </div>
</div>

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
><?php }
}
