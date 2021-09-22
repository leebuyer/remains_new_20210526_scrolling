<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:52:59
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8eccba983b6_72996900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d394bae6ccb153b7612dc521fac9109f4256bf1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\admin.tpl',
      1 => 1622215294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:admin_banner.tpl' => 1,
    'file:article_form.tpl' => 1,
    'file:tree_action_form.tpl' => 1,
    'file:tree_appearance_form.tpl' => 1,
    'file:tree_more_form.tpl' => 1,
    'file:tree_toolbox_form.tpl' => 1,
    'file:tiger_reason_form.tpl' => 1,
    'file:tiger_action_form.tpl' => 1,
    'file:tiger_appearance_form.tpl' => 1,
    'file:tiger_more_form.tpl' => 1,
    'file:tiger_toolbox_form.tpl' => 1,
    'file:tree_reason_form.tpl' => 1,
    'file:admin_side.tpl' => 1,
    'file:footer_script.tpl' => 1,
  ),
),false)) {
function content_60b8eccba983b6_72996900 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body id="body" class="w-100">

  <?php $_smarty_tpl->_subTemplateRender("file:admin_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <div class="container">    
    <div class="row">  
      <div class="col-md-8">
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "article_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:article_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          
        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_action_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tree_action_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_appearance_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tree_appearance_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_more_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tree_more_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tree_toolbox_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tree_toolbox_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_reason_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tiger_reason_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_action_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tiger_action_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_appearance_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tiger_appearance_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_more_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tiger_more_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "tiger_toolbox_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:tiger_toolbox_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:tree_reason_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>
      </div>
      <div class="col-md-4">
        <?php $_smarty_tpl->_subTemplateRender("file:admin_side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer_script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <!-- END footer_script -->
    </div>
  </div>
</body>

</html><?php }
}
