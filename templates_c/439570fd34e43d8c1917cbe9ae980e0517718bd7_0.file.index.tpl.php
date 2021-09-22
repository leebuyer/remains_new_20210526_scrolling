<?php
/* Smarty version 3.1.30, created on 2021-06-06 16:41:48
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bcdeac55bdd8_32661821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439570fd34e43d8c1917cbe9ae980e0517718bd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\index.tpl',
      1 => 1622990488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:tiger_nav.tpl' => 1,
    'file:tree_nav.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:web_entrance.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:footer_script.tpl' => 1,
  ),
),false)) {
function content_60bcdeac55bdd8_32661821 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END head -->
</head>
<body id="body" class="w-100">
		
    <?php if ($_smarty_tpl->tpl_vars['op']->value == "tiger.php") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:tiger_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree.php") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:tree_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
    <!-- END nav -->
    <div class="d-none d-sm-block">
        <?php $_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <!-- END banner -->

    <?php $_smarty_tpl->_subTemplateRender("file:web_entrance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 	<!-- END web_entrance -->
    <a id="back2Top" title="回頂部" href="#">&#10148;</a>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END footer -->

  	<?php $_smarty_tpl->_subTemplateRender("file:footer_script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  	<!-- END footer_script -->

</body>
</html><?php }
}
