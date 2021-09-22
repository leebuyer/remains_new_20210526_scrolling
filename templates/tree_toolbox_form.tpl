<h1 class=" font-weight-bold">編輯榕樹下老師工具箱</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="toolbox_title" id="toolbox_title" placeholder="請輸入標題" value="{$tree_toolbox.toolbox_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">簡介</label>
        <div class="col-md-10">
            <textarea class="form-control" name="toolbox_introduction" id="toolbox_introduction" placeholder="請輸入簡介">{$tree_toolbox.toolbox_introduction}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">下載</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="toolbox_download" id="toolbox_download" placeholder="請輸入連結網址" value="{$tree_toolbox.toolbox_download}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tree_toolbox.toolbox_sn) and $tree_toolbox.toolbox_sn > 0}
                <input type="hidden" name="op" value="update_tree_toolbox">
                <input type="hidden" name="toolbox_sn" value="{$tree_toolbox.toolbox_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tree_toolbox">
            {/if}
            <button type="submit" class="btn btn-primary">儲存</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'toolbox_introduction' );
</script>
