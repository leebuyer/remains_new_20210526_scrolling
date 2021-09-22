<?php
/* Smarty version 3.1.30, created on 2021-06-17 10:59:26
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tree_more.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60cb0eee806977_31581616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c16208ec97624ffe9a4a8d3fc96b3d562c210203' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tree_more.tpl',
      1 => 1621521152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb0eee806977_31581616 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="mb-3 text-center">更多遺址事</h2>
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
      <div class="bg-light p-3">
        <p class="lead text-justify fontsizebox">榕樹下遺址
        西濱快速公路56K+140-56K+320段榕樹下文化遺址緊急搶救發掘成果報告書
        新屋區榕樹下遺址在臺灣史前史的重要性（桃園文獻第8期）
        發掘小故事：考古發掘現場是最好的考古教育場域。發掘團隊在搶救發掘期間開放兩天現場參訪。一天是針對鄰近遺址的國小做現場導覽，參與的小學生約一百三十五人。一天則是開放媒體採訪和社區大學的成人的參訪。
        </p>
      </div> 
    </div>
  </div>
  <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tree_more']->value, 'more');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['more']->value) {
?>
      <div class="col-md-4 text-center mt-3">
        <a href="tree_more.php?more_sn=<?php echo $_smarty_tpl->tpl_vars['more']->value['more_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['more']->value['pic'];?>
" class="img-thumbnail img-fluid" alt="<?php echo $_smarty_tpl->tpl_vars['more']->value['more_title'];?>
"></a>
        <div class="caption mt-3">
          <div style="height: 60px;">
            <h5 class="font-weight-bold"><a href="tree_more.php?more_sn=<?php echo $_smarty_tpl->tpl_vars['more']->value['more_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['more']->value['more_title'];?>
</a></h5>
          </div>
        </div>
      </div>
    <?php
}
} else {
?>

    <div class="d-flex justify-content-center bg-secondary mb-3 ml-3">
      <div class="p-2 bg-info text-white"><h5>抱歉目前尚無文章，準備中敬請期待！</h5></div>
    </div>  
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

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
