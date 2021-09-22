<?php
/* Smarty version 3.1.30, created on 2021-06-03 16:14:45
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\web_entrance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8e3d5d83d99_82493474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd4475c974c766a8e2c90a1d31d6fdc7e2825ce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\web_entrance.tpl',
      1 => 1622729681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:show_article.tpl' => 1,
    'file:list_article.tpl' => 1,
  ),
),false)) {
function content_60b8e3d5d83d99_82493474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="mb-3 text-center">最新消息</h2>
            	<div class="row">
	            	<div class="col-md-4">
	            		
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
            	
	            <?php if ($_smarty_tpl->tpl_vars['op']->value == "show_article") {?>
	                <?php $_smarty_tpl->_subTemplateRender("file:show_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
	            <?php } else { ?>
	                <?php $_smarty_tpl->_subTemplateRender("file:list_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	            <?php }?>
          	       
          	</div> 
        </div>
    </div>
    
</section>

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
>





        <?php }
}
