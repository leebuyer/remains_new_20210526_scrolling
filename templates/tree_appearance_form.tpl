<h1 class=" font-weight-bold">編輯榕樹下拼湊史前人的模樣</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="admin.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="appearance_title" id="appearance_title" placeholder="請輸入文章標題" value="{$tree_appearance.appearance_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章簡介</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="appearance_introduction" id="appearance_introduction" placeholder="請輸入文章簡介" value="{$tree_appearance.appearance_introduction}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="appearance_content" id="appearance_content" placeholder="請輸入文章內容">{$tree_appearance.appearance_content}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-6 control-label">嵌入3D圖：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="appearance_3d" id="appearance_3d" placeholder="請輸入iframe標籤" value="{$tree_appearance.appearance_3d}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tree_appearance.appearance_sn) and $tree_appearance.appearance_sn > 0}
                <input type="hidden" name="op" value="update_tree_appearance">
                <input type="hidden" name="appearance_sn" value="{$tree_appearance.appearance_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tree_appearance">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'appearance_content' );
</script>
