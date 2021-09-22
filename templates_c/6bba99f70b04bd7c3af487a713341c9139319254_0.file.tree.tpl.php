<?php
/* Smarty version 3.1.30, created on 2021-06-05 20:20:21
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tree.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bbc065931e69_18004578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bba99f70b04bd7c3af487a713341c9139319254' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tree.tpl',
      1 => 1621521156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:tiger_nav.tpl' => 1,
    'file:tree_nav.tpl' => 1,
    'file:banner_tree.tpl' => 1,
    'file:tree_action.tpl' => 1,
    'file:tree_reason.tpl' => 1,
    'file:tree_appearance.tpl' => 1,
    'file:tree_more.tpl' => 1,
    'file:tree_toolbox.tpl' => 1,
    'file:tree_appearance_show.tpl' => 1,
    'file:tree_more_show.tpl' => 1,
    'file:tree_index.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:footer_script.tpl' => 1,
  ),
),false)) {
function content_60bbc065931e69_18004578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END head -->
</head>
<body id="body" class="w-100">
  <?php if ($_smarty_tpl->tpl_vars['op']->value == "index.php") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger.php") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tiger_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tree_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php }?>
  
  <!-- END tree_nav -->

  <?php $_smarty_tpl->_subTemplateRender("file:banner_tree.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- END banner -->

  <div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "tree_action") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_reason") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_reason.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_appearance") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_appearance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_more") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_toolbox") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_toolbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_appearance_show") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_appearance_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_more_show") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_more_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:tree_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php }?>
        </div>
    </div>
  </div>
  <!-- END tree_content -->
  <a id="back2Top" title="回頂部" href="#">&#10148;</a>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END footer_tabs -->

	<?php $_smarty_tpl->_subTemplateRender("file:footer_script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  	<!-- END footer_script -->
    
</body>
</html><?php }
}
