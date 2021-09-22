<?php
/* Smarty version 3.1.30, created on 2021-06-04 17:29:50
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tiger.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60ba46ee0e4cc3_36604374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4e76a62eb822f9a932a3db11ceeb3bcb9af1ad4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tiger.tpl',
      1 => 1621521162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:tree_nav.tpl' => 1,
    'file:tiger_nav.tpl' => 1,
    'file:banner_tiger.tpl' => 1,
    'file:tiger_action.tpl' => 1,
    'file:tiger_reason.tpl' => 1,
    'file:tiger_appearance.tpl' => 1,
    'file:tiger_more.tpl' => 1,
    'file:tiger_toolbox.tpl' => 1,
    'file:tiger_appearance_show.tpl' => 1,
    'file:tiger_more_show.tpl' => 1,
    'file:tiger_index.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:footer_script.tpl' => 1,
  ),
),false)) {
function content_60ba46ee0e4cc3_36604374 (Smarty_Internal_Template $_smarty_tpl) {
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

  <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree.php") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tree_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:tiger_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php }?>
  
  <!-- END tiger_nav -->

  <?php $_smarty_tpl->_subTemplateRender("file:banner_tiger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- END banner -->

  <div class="container mt-3">
      <div class="row">
          <div class="col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['op']->value == "tiger_action") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_action.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_reason") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_reason.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_appearance") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_appearance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_more") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_toolbox") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_toolbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_appearance_show") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_appearance_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_more_show") {?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_more_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
            <?php } else { ?>
              <?php $_smarty_tpl->_subTemplateRender("file:tiger_index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php }?>
          </div>
      </div>
  </div>
  <!-- END tiger_content -->
  <a id="back2Top" title="回頂部" href="#">&#10148;</a>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <!-- END footer -->

	<?php $_smarty_tpl->_subTemplateRender("file:footer_script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<!-- END footer_script -->
    
</body>
</html>
<?php }
}
