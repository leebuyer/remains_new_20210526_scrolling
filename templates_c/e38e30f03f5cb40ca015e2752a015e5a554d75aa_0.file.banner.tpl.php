<?php
/* Smarty version 3.1.30, created on 2021-06-06 16:41:48
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\banner.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bcdeac627140_42147694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e38e30f03f5cb40ca015e2752a015e5a554d75aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\banner.tpl',
      1 => 1622990497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bcdeac627140_42147694 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <?php if ($_smarty_tpl->tpl_vars['op']->value == "show_article") {?>
        <img src="images/index_banner.png" alt="<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
" class="img-fluid">
    <?php }?>
</div>
<style>
/* Make the image fully responsive */
.carousel-inner img {
width: 100%;
height: 720px;
}
</style>
<div id="carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'images', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['images']->value) {
?>
		    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>">
		        <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['images']->value['sn'];?>
">
		        <img class="d-block w-100 img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['images']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
		        </a>
		        <div class="carousel-caption" style="text-shadow: 1px 2px 1px #000;">
		            <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['images']->value['summary_title'];?>
</h1>
		            <h3><?php echo $_smarty_tpl->tpl_vars['images']->value['summary'];?>
</h3>
		        </div>   
		    </div>
	    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<?php }
}
