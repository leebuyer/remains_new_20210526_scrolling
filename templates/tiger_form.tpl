<h1 class=" font-weight-bold">編輯虎頭山公園拼湊史前人的模樣</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="tool.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="tiger_title" id="tiger_title" placeholder="請輸入文章標題" value="{$tiger.tiger_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="tiger_content" id="tiger_content" placeholder="請輸入文章內容">{$tiger.tiger_content}</textarea>
        </div>
    </div>

    <!--div class="form-group">
        <label class="col-md-2 control-label">上傳圖片：</label>
        <div class="col-md-10">
            <input type="file" name="tiger_pic" id="tiger_pic">
            {if isset($tiger.pic)}
                <img src="{$tiger.pic}" alt="{$tiger.tiger_title}">
            {/if}
        </div>
    </div-->

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tiger.tiger_sn) and $tiger.tiger_sn > 0}
                <input type="hidden" name="op" value="update_tiger">
                <input type="hidden" name="tiger_sn" value="{$tiger.tiger_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tiger">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'tiger_content' );
</script>
