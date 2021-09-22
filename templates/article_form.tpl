<script src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">
 
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" enctype="multipart/form-data" class="my-4" id="myform">

    <div class=" form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" value="{$article.title}">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容">{$article.content}</textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="article_pic" id="article_pic" placeholder="請上傳一張封面圖">
        {if isset($article.pic)}
            <img src="{$article.pic}" alt="{$article.title}">
        {/if}
    </div>
    <div class="text-center">
        {if isset($article.sn) and $article.sn > 0}
            <input type="hidden" name="op" value="update_article">
            <input type="hidden" name="sn" value="{$article.sn}">
        {else}
            <input type="hidden" name="op" value="insert_article">
        {/if}
            <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>
 
<script>
    CKEDITOR.replace('content');
</script>
