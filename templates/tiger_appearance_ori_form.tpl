<h1 class=" font-weight-bold">編輯虎頭山拼湊史前人的模樣</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="appearance_title" id="appearance_title" placeholder="請輸入文章標題" value="{$tiger_appearance.appearance_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章簡介</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="appearance_introduction" id="appearance_introduction" placeholder="請輸入文章簡介" value="{$tiger_appearance.appearance_introduction}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="appearance_content" id="appearance_content" placeholder="請輸入文章內容">{$tiger_appearance.appearance_content}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">上傳圖片：</label>
        <div class="col-md-10">
            <input type="file" name="tiger_appearance_pic" id="tiger_appearance_pic">
            {if isset($tiger_appearance.pic)}
                <img src="{$tiger_appearance.pic}" alt="{$tiger_appearance.appearance_title}">
            {/if}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tiger_appearance.appearance_sn) and $tiger_appearance.appearance_sn > 0}
                <input type="hidden" name="op" value="update_tiger_appearance">
                <input type="hidden" name="appearance_sn" value="{$tiger_appearance.appearance_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tiger_appearance">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'appearance_content' );
</script>
