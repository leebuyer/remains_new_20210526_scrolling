<h1 class=" font-weight-bold">編輯榕樹下更多遺址事</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="more_title" id="more_title" placeholder="請輸入文章標題" value="{$tree_more.more_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章簡介</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="more_introduction" id="more_introduction" placeholder="請輸入文章標題" value="{$tree_more.more_introduction}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="more_content" id="more_content" placeholder="請輸入文章內容">{$tree_more.more_content}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">上傳圖片：</label>
        <div class="col-md-10">
            <input type="file" name="tree_more_pic" id="tree_more_pic">
            {if isset($tree_more.pic)}
                <img src="{$tree_more.pic}" alt="{$tree_more.more_title}">
            {/if}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tree_more.more_sn) and $tree_more.more_sn > 0}
                <input type="hidden" name="op" value="update_tree_more">
                <input type="hidden" name="more_sn" value="{$tree_more.more_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tree_more">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'more_content' );
</script>
