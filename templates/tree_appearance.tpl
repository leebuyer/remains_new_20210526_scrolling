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
    <script async src="https://static.addtoany.com/menu/page.js"></script>
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
        <p class="lead text-justify fontsizebox">四千多年前，早在榕樹下聚落出現之前，有一群人來到現在桃園南圳（大社溪分流）和大坡溪之間的海階，開始在這個東北-西南走向海階的西北側和往北延伸的緩坡上生活。

        （排版小附註，不影響正文閱讀）
        這個海階約在距今五、六千年前左右因全新世海進而形成，之後因構造運動而抬升，現今海階高度約在海拔八至十公尺左右，而史前人的遺留約在海拔9.3公尺左右，到北側6.2公尺仍有發現。

        榕樹下遺址的西側有兩條南北向沙丘，距離遺址比較近的沙丘在史前人來到此處時已經形成了。沙丘與海階之間是潟湖，史前人可以進行漁撈。這些沙丘也幫助史前人遮擋冬天強勁東北季風。此外，最重要的水源也在觸手可及之處（現在的南圳）；取水的同時，看到河川裡的卵礫石，這些卵礫石正是史前人製作石器的材料。此處真是再好不過的生活地點！}</p>
      </div> 
    </div>
  </div>
  <div class="row">
    {foreach from=$all_tree_appearance item=appearance}
      <div class="col-md-4 text-center mt-3">
        {$appearance.appearance_3d}
        <div class="caption mt-3">
          <div style="height: 60px;">
            <h5 class="font-weight-bold"><a href="tree_appearance.php?appearance_sn={$appearance.appearance_sn}">{$appearance.appearance_title}</a></h5>
          </div>        
        </div>
      </div>
    {foreachelse}
      <div class="d-flex justify-content-center bg-secondary mb-3 ml-3">
        <div class="p-2 bg-info text-white"><h5>抱歉目前尚無文章，準備中敬請期待！</h5></div>
      </div>  
    {/foreach}
  </div>
  {$bar}
</div>

<!-- 內文文字大小script -->
<script type="text/javascript" src="js/fontsize.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        fontResizer('1.2rem', '1.5rem', '2rem');
    });
</script>