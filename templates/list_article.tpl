<div class="row">
  <div class="col-md-4">
    {include file='scrolling.tpl'}
  </div> 
  <div class="col-md-8">
    <table class="table table-responsive table-hover fontsizebox">
      <thead class="">
        <tr class="row text-center p-1">
          {if !$isAdmin}
            <th class="col">圖片</th>
            <th class="col">標題</th>
            <th class="col">內容</th>
            <th class="col">時間</th>
          {else}
            <th class="col">圖片</th>
            <th class="col">標題</th>
            <th class="col">內容</th>
            <th class="col">時間</th>
            <th class="col">功能</th>
          {/if}
        </tr>
      </thead>
      <tbody>
        {foreach from=$all item=article}
          <tr class="row p-1">
            {if !$isAdmin}
              <td class="col"><a href="index.php?sn={$article.sn}"><img src="{$article.pic}" alt="{$article.title}" class="img-thumbnail img-fluid"></a></td>
              <td class="col"><a href="index.php?sn={$article.sn}">{$article.summary_title}</a></td>
              <td class="col">{$article.summary}</td>
              <td class="col">{$article.create_time}</td>
            {else}
              <td class="col"><a href="index.php?sn={$article.sn}"><img src="{$article.pic}" alt="{$article.title}" class="img-thumbnail img-fluid"></a></td>
              <td class="col"><a href="index.php?sn={$article.sn}">{$article.summary_title}</a></td>
              <td class="col">{$article.summary}</td>
              <td class="col">{$article.create_time}</td>
              <td class="col">
                <button class="btn btn-primary my-1"><a href="admin.php?op=article_form&sn={$article.sn}" class="text-white">編輯</a></button>
                <button class="btn btn-danger my-1"><a href="admin.php?op=delete_article&sn={$article.sn}" class="text-white">刪除</a></button>
              </td>
            {/if}
          </tr> 
        {/foreach}
      </tbody> 
    </table>
 </div>
</div> 
{$bar}

