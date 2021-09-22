<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2 class="mb-3 text-center">一起考古去</h2>
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
  
  <!-----------一起考古去文章置放處 開始(內容放置於<p>後)------------->
  <section class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 fontsizebox">      
          <p class="lead text-justify">
            {$tiger_action.action_content}
          </p>
          {if $isAdmin}
          <a href="admin.php?op=tiger_action_form&action_sn={$tiger_action.action_sn}" class="btn btn-warning">編輯文章</a>
          <a href="admin.php?op=delete_tiger_action&action_sn={$tiger_action.action_sn}" class="btn btn-danger">刪除文章</a>
        {/if}   
        </div>
        <div class="col-md-4 sidebar">
          <h2 class="mb-4 text-center">圖片花絮</h2>       
          <div class="sidebar-box">
             <img src="img/tree_index_1.png" alt="Image placeholder" class="img-fluid mb-4 w-100">         
              <p>

              </p>
          </div> 
          <div class="sidebar-box">
             <img src="img/tree_index_2.png" alt="Image placeholder" class="img-fluid mb-4 w-100">
              <p>

              </p>
          </div>  
          <div class="sidebar-box">
             <img src="img/tree_index_3.png" alt="Image placeholder" class="img-fluid mb-4 w-100">
              <p>

              </p>
          </div>  
          <div class="sidebar-box">
             <img src="img/tree_index_4.png" alt="Image placeholder" class="img-fluid mb-4 w-100">
              <p>

              </p>
          </div>              
        </div>
      </div>
    </div>
  </section>
  <!-----------一起考古去文章置放處 結束(內容放置於</p>前)------------->

</div>

<!-- 內文文字大小script -->
<script type="text/javascript" src="js/fontsize.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        fontResizer('1.2rem', '1.5rem', '2rem');
    });
</script>

