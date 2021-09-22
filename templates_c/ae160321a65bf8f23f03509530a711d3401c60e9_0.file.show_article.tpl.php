<?php
/* Smarty version 3.1.30, created on 2021-06-03 14:43:19
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8ce67958fd6_71053248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae160321a65bf8f23f03509530a711d3401c60e9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\show_article.tpl',
      1 => 1622644253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8ce67958fd6_71053248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container article">
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 fontsizebox">
            <span class="article-meta">發佈時間：<?php echo $_smarty_tpl->tpl_vars['article']->value['create_time'];?>
</span>  
        </div>
    </div>
    <div class="row">
         <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-thumbnail img-fluid my-3 w-100">
    </div>
    <div class="fontsizebox article-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
    
    <?php if (isset($_smarty_tpl->tpl_vars['previous']->value['sn']) || isset($_smarty_tpl->tpl_vars['next']->value['sn'])) {?>
        <div class="row my-5">
            <div class="col-6 text-left">
                <?php if ($_smarty_tpl->tpl_vars['previous']->value['sn']) {?>
                    <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['previous']->value['sn'];?>
" class="btn btn-info btn-block">
                        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                        <?php echo $_smarty_tpl->tpl_vars['previous']->value['title'];?>

                    </a>
                <?php }?>
            </div>
            <div class="col-6 text-right">        
                <?php if ($_smarty_tpl->tpl_vars['next']->value['sn']) {?>
                    <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['next']->value['sn'];?>
" class="btn btn-info btn-block">
                        <?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>

                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                    </a>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
 <?php }
}
