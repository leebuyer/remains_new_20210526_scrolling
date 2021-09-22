<?php
/* Smarty version 3.1.30, created on 2021-06-04 17:30:49
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tiger_more.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60ba4729e81583_33199624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5f724a475b3e01426784e10bd6f3261ade2133e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tiger_more.tpl',
      1 => 1621521159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba4729e81583_33199624 (Smarty_Internal_Template $_smarty_tpl) {
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
        <p class="lead text-justify fontsizebox">石質遺物：相較於大量的陶質遺物，目前虎頭山公園遺址裡很少發現典型的打製或磨製石器。雖然遺址裡出土不少當地隨處可得的石塊（例如砂岩或變質砂岩），但石塊上沒有明顯使用過的痕跡、也沒有發現製作石器產生的廢料，因此推測這些石塊可能不是作為工具使用。

        除了當地的石塊，虎頭山公園遺址裡還發現一件特別的東西——蛇紋岩製作的環，環上還有人為鑽孔的痕跡。從外表來看，這件環不大、而且殘破得只剩下一小段，但這一小段的環殘件卻可能告訴我們很多故事！蛇紋岩的產地遠在臺灣東部，為什麼蛇紋岩環會在桃園被發現呢？是誰因為什麼原因，用蛇紋岩製作了這個美麗的環？又是什麼原因讓它來到虎頭山呢？從這裡我們也能進一步想像，史前人的生活是非常豐富的；甚至和現在的我們一樣，會到處移動、也會和島上其他的居民互動呢！

        發掘團隊發現這件蛇紋岩環的時候還發生了有趣的小故事喔！快到「當考古在虎頭山公園」一探究竟吧！陶質遺留：虎頭山公園遺址出土了大量的陶片，以陶質來看，大部分的陶片是由細緻的黏土製成、少部分會摻入砂粒。從顏色上來看，陶片的顏色有米白色、紅色和灰黑色。再仔細觀察這些陶片，可以發現史前人在陶片上施加了不同的紋飾：大部分是方格印紋，也有直條紋和曲折紋。在2020年發掘工作即將結束時，探坑裡竟然還出土了繩紋陶片，或許虎頭山公園遺址的故事比我們現在想像的更加久遠呢！

        這麼多的陶器碎片，讓人不禁好奇史前人使用的容器到底長什麼樣子呢？2021年初，專家完成了幾件大型陶罐的修復。這些陶罐的形狀非常特殊，在臺灣其他地方尚未發現這類陶罐－－陶罐的罐身很大、底部卻很小，可能要有陶支腳支撐才能站立。

        考古學家目前也不確定這類罐子的用途，你覺得它可能是做什麼用的呢？</p>
      </div> 
    </div>
  </div>
  <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tiger_more']->value, 'more');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['more']->value) {
?>
      <div class="col-md-4 text-center mt-3">
        <a href="tiger_more.php?more_sn=<?php echo $_smarty_tpl->tpl_vars['more']->value['more_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['more']->value['pic'];?>
" class="img-thumbnail img-fluid" alt="<?php echo $_smarty_tpl->tpl_vars['more']->value['more_title'];?>
"></a>
        <div class="caption mt-3">
          <div style="height: 60px;">
            <h5 class="font-weight-bold"><a href="tiger_more.php?more_sn=<?php echo $_smarty_tpl->tpl_vars['more']->value['more_sn'];?>
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
