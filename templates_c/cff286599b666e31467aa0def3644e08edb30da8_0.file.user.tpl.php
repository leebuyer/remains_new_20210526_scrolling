<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:51:26
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8ec6e44f7a1_93360768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cff286599b666e31467aa0def3644e08edb30da8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\user.tpl',
      1 => 1621521150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:user_banner.tpl' => 1,
    'file:user_form.tpl' => 2,
    'file:display_user.tpl' => 1,
    'file:user_side.tpl' => 1,
    'file:footer_script.tpl' => 1,
  ),
),false)) {
function content_60b8ec6e44f7a1_93360768 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body id="body" class="w-100">

  <?php $_smarty_tpl->_subTemplateRender("file:user_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <div class="container">    
    <div class="row">  
      <div class="col-md-8">          
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:user_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
          <?php $_smarty_tpl->_subTemplateRender("file:display_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:user_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php }?>
      </div>
      <div class="col-md-4">
        <?php $_smarty_tpl->_subTemplateRender("file:user_side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
      <?php $_smarty_tpl->_subTemplateRender("file:footer_script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <!-- END footer_script -->
    </div>
  </div>
</body>

</html>

<?php }
}
