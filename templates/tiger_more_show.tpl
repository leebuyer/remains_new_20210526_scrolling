<style>
.zoom:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3);
  z-index:1; 
}
</style>
<div class="container mt-3">
  <div class="alert bg-light alert-dismissible fade show">
  <button type="button" class="close close-alert" data-dismiss="modal">&times;</button>
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
      <div class="col-md-4 fontResizer">            
        <a class="" style="font-size:16px;border:0;width:5em;cursor:default;">文字大小：</a>
        <a href="javascript:void(0);" class="smallFont">小</a>
        <a href="javascript:void(0);" class="medFont">中</a>
        <a href="javascript:void(0);" class="largeFont">大</a>         
      </div>       
    </div>
    <div class="row">
      <div class="col-sm-6">
        <img src="{$tiger_more.pic}" alt="{$tiger_more.more_title}" class="img-thumbnail img-fluid zoom">  
      </div>
      <div class="col-sm-6">
        <div class="alert alert-secondary">
          <h3 class="fontsizebox">{$tiger_more.more_title}</h3>
        </div>
        <div class="alert alert-secondary">
          <h3 class="text-justify fontsizebox">{$tiger_more.more_content}</h3>
        </div>
        <div>
        {if $isAdmin}
          <a href="admin.php?op=tiger_more_form&more_sn={$tiger_more.more_sn}" class="btn btn-warning">編輯文章</a>
          <a href="admin.php?op=delete_tiger_more&more_sn={$tiger_more.more_sn}" class="btn btn-danger">刪除文章</a>
        {/if}
      </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(()=>{
    $('.close-alert').click(()=>{
      history.back();
    });
  });
</script>


<!-- 內文文字大小script -->
<script type="text/javascript" src="js/fontsize.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        fontResizer('1.2rem', '1.5rem', '2rem');
    });
</script>
