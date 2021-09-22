<h1 class=" font-weight-bold">編輯虎頭山一起考古去</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="action_content" id="action_content" placeholder="請輸入文章內容">{$tiger_action.action_content}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tiger_action.action_sn) and $tiger_action.action_sn > 0}
                <input type="hidden" name="op" value="update_tiger_action">
                <input type="hidden" name="action_sn" value="{$tiger_action.action_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tiger_action">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'action_content' );
</script>
 