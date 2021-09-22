<h1 class=" font-weight-bold">編輯榕樹下文章</h1>
<script src="class/ckeditor/ckeditor.js"></script>
<form action="tool.php" method="post" role="form" enctype="multipart/form-data" class=" font-weight-bold">
    <div class="form-group">
        <label class="col-md-2 control-label">文章標題</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="tree_title" id="tree_title" placeholder="請輸入文章標題" value="{$tree.tree_title}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">文章內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="tree_content" id="tree_content" placeholder="請輸入文章內容">{$tree.tree_content}</textarea>
        </div>
    </div>

    <!--div class="form-group">
        <label class="col-md-2 control-label">上傳圖片：</label>
        <div class="col-md-10">
            <input type="file" name="tree_pic" id="tree_pic">
            {if isset($tree.pic)}
                <img src="{$tree.pic}" alt="{$tree.tree_title}">
            {/if}
        </div>
    </div-->

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            {if isset($tree.tree_sn) and $tree.tree_sn > 0}
                <input type="hidden" name="op" value="update_tree">
                <input type="hidden" name="tree_sn" value="{$tree.tree_sn}">
            {else}
                <input type="hidden" name="op" value="insert_tree">
            {/if}
            <button type="submit" class="btn btn-primary">儲存文章</button>
        </div>
    </div>
</form>

<script>
    CKEDITOR.replace( 'tree_content' );
</script>
