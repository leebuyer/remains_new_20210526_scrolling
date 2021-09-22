<div class="row">
    {if $op=="show_article"}
        <img src="images/index_banner.png" alt="{$web_name}" class="img-fluid">
    {/if}
</div>
<style>
/* Make the image fully responsive */
.carousel-inner img {
width: 100%;
height: 720px;
}
</style>
<div id="carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	    {foreach from=$all key=i item=images}
		    <div class="carousel-item {if $i==0}active{/if}">
		        <a href="index.php?sn={$images.sn}">
		        <img class="d-block w-100 img-fluid" src="{$images.img}" alt="{$article.title}">
		        </a>
		        <div class="carousel-caption" style="text-shadow: 1px 2px 1px #000;">
		            <h1 class="display-3">{$images.summary_title}</h1>
		            <h3>{$images.summary}</h3>
		        </div>   
		    </div>
	    {/foreach}
	</div>
    <a class="carousel-control-prev" href="#carousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
