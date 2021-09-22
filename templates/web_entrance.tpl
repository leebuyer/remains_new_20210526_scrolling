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
            	
	            {if $op=="show_article"}
	                {include file='show_article.tpl'}            
	            {else}
	                {include file="list_article.tpl"}
	                {include file="multislider.tpl"}
	            {/if}
          	       
          	</div> 
        </div>
    </div>
    
</section>

<!-- 內文文字大小script -->
<script type="text/javascript" src="js/fontsize.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        fontResizer('1.2rem', '1.5rem', '2rem');
    });
</script>





        