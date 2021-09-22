<div class="container article">
    
    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>{$article.title}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 fontsizebox">
            <span class="article-meta">發佈時間：{$article.create_time}</span>  
        </div>
    </div>
    <div class="row">
         <img src="{$article.pic}" alt="{$article.title}" class="img-thumbnail img-fluid my-3 w-100">
    </div>
    <div class="fontsizebox article-content">{$article.content}</div>
    
    {if isset($previous.sn) or isset($next.sn)}
        <div class="row my-5">
            <div class="col-6 text-left">
                {if $previous.sn}
                    <a href="index.php?sn={$previous.sn}" class="btn btn-info btn-block">
                        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                        {$previous.title}
                    </a>
                {/if}
            </div>
            <div class="col-6 text-right">        
                {if $next.sn}
                    <a href="index.php?sn={$next.sn}" class="btn btn-info btn-block">
                        {$next.title}
                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                    </a>
                {/if}
            </div>
        </div>
    {/if}
</div>
 