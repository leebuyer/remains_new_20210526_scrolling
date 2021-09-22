<?php
/* Smarty version 3.1.30, created on 2021-06-04 17:30:07
  from "D:\xampp\htdocs\remains_new_20210526_scrolling\templates\tiger_appearance.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60ba46ffbe06f7_48444020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8d67a3d38ead892817f52000d31aab1d2bcc7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_scrolling\\templates\\tiger_appearance.tpl',
      1 => 1622648253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba46ffbe06f7_48444020 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="mb-3 text-center">拼湊史前人的模樣</h2>
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
        <p class="lead text-justify fontsizebox">從現代行政區域劃分來看，虎頭山公園位在桃園市桃園區忠義里。從地形來看，公園位在林口臺地山前沖積扇，鄰近有南崁溪。如果想實地看看虎頭山公園遺址，可以依著地圖來到公園的兒童遊樂園、孔廟和老人文康活動中心一帶。考古學家在這裡發掘時，從地層裡看到厚厚的紅土層和紅土礫石層。紅土是氧化鐵含量較高的紅色土壤，是受到高雨量影響的證據；而礫石層則是台地由河流所堆積而成的證據，我們可以從地層線索，想像一千多年的人群生活在什麼樣的地形和環境。

        當你在虎頭山公園散步時，是否感到被低海拔闊葉林包圍的芬多精呢？如果仔細辨認，會發現相思樹、苦楝、血桐、榕樹、樟樹等。冬天因為東北風的影響，走向虎頭山公園後山區時，會看到白茫茫的一片芒草喔！根據發掘團隊的訪談，我們現在看到的植被樣貌大多是公園成立後才開始種植的。不知道過去生活在此的史前人，看到的是什麼樣的風景呢？

        從考古發掘取得的木炭標本定年結果來看，大約一千八百年至一千兩百年前就有人群在虎頭山公園生活啦！兒童遊樂園區不僅是我們現代人休憩遊樂的好地方，史前人也喜歡在這區活動喔！他們在這裡留下大量的陶器破片、陶罐，還有人為排列的礫石，甚至出土了一件用蛇紋岩製作的環呢！
        </p>
      </div> 
    </div>
  </div>
  <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tiger_appearance']->value, 'appearance');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['appearance']->value) {
?>
      <div class="col-md-4 text-center mt-3">
        <a href="tiger_appearance.php?appearance_sn=<?php echo $_smarty_tpl->tpl_vars['appearance']->value['appearance_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['pic'];?>
" class="img-thumbnail img-fluid center-block" alt="<?php echo $_smarty_tpl->tpl_vars['appearance']->value['appearance_title'];?>
"></a>
        <div class="caption mt-3">
          <div style="height: 60px;">
            <h5 class="font-weight-bold"><a href="tiger_appearance.php?appearance_sn=<?php echo $_smarty_tpl->tpl_vars['appearance']->value['appearance_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['appearance']->value['appearance_title'];?>
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
>

<?php }
}
