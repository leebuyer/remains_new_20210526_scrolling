<?php
/* Smarty version 3.1.30, created on 2021-06-05 05:02:18
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\multislider.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60bae93ab8aaa6_20080097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71b5cf400c3c96b6d31dd73371a3b51dac7466d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\multislider.tpl',
      1 => 1622862135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bae93ab8aaa6_20080097 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
  #mixedSlider {
  position: relative;
}
#mixedSlider .MS-content {
  white-space: nowrap;
  overflow: hidden;
  margin: 0 5%;
}
#mixedSlider .MS-content .item {
  display: inline-block;
  width: 33.3333%;
  position: relative;
  vertical-align: top;
  overflow: hidden;
  height: 100%;
  white-space: normal;
  padding: 0 10px;
}
@media (max-width: 991px) {
  #mixedSlider .MS-content .item {
    width: 50%;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-content .item {
    width: 100%;
  }
}
#mixedSlider .MS-content .item .imgTitle {
  position: relative;
}
#mixedSlider .MS-content .item .imgTitle .blogTitle {
  margin: 0;
  text-align: left;
  letter-spacing: 2px;
  color: #252525;
  font-style: italic;
  position: absolute;
  background-color: rgba(255, 255, 255, 0.5);
  width: 100%;
  bottom: 0;
  font-weight: bold;
  padding: 0 0 2px 10px;
}
#mixedSlider .MS-content .item .imgTitle img {
  height: auto;
  width: 100%;
}
#mixedSlider .MS-content .item p {
  font-size: 16px;
  margin: 2px 10px 0 5px;
  text-indent: 15px;

}
#mixedSlider .MS-content .item a {
  float: right;
  margin:;
  font-size: 16px;
  font-style: italic;
  color: rgba(173, 0, 0, 0.82);
  font-weight: bold;
  letter-spacing: 1px;
  transition: linear 0.1s;
}
#mixedSlider .MS-content .item a:hover {
  text-shadow: 0 0 1px grey;
}
#mixedSlider .MS-controls button {
  position: absolute;
  border: none;
  background-color: transparent;
  outline: 0;
  font-size: 50px;
  top: 95px;
  color: rgba(0, 0, 0, 0.4);
  transition: 0.15s linear;
}
#mixedSlider .MS-controls button:hover {
  color: rgba(0, 0, 0, 0.8);
}
@media (max-width: 992px) {
  #mixedSlider .MS-controls button {
    font-size: 30px;
  }
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls button {
    font-size: 20px;
  }
}
#mixedSlider .MS-controls .MS-left {
  left: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-left {
    left: -10px;
  }
}
#mixedSlider .MS-controls .MS-right {
  right: 0px;
}
@media (max-width: 767px) {
  #mixedSlider .MS-controls .MS-right {
    right: -10px;
  }
}
</style>
<div class="container">
	<div class="row">
		<div id="mixedSlider">
		    <div class="MS-content">
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
			        <div class="item">
			            <div class="imgTitle mx-auto d-flex justify-content-center">
			                <h4 class="blogTitle"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary_title'];?>
</h4>
			                <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-thumbnail img-fluid"></a>
			            </div>
			            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>
			            <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">Read More</a>
			        </div>
		        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		    </div>
		    <div class="MS-controls">
		        <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
		        <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
		    </div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 src="js/multislider.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
>
	 $('#mixedSlider').multislider({
	 	duration: 750,
	 	interval: 3000
	 });
<?php echo '</script'; ?>
><?php }
}
