<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    {include file='head.tpl'}
    <!-- END head -->
</head>
<body id="body" class="w-100">
  {if $op=="index.php"}
    {include file="nav.tpl"}
  {elseif $op=="tiger.php"}
    {include file='tiger_nav.tpl'}
    {else}
    {include file='tree_nav.tpl'}
  {/if}
  
  <!-- END tree_nav -->

  {include file='banner_tree.tpl'}
  <!-- END banner -->

  <div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
          {if $op=="tree_action"}
            {include file="tree_action.tpl"}
          {elseif $op=="tree_reason"}
            {include file='tree_reason.tpl'}
          {elseif $op=="tree_appearance"}
            {include file='tree_appearance.tpl'}
          {elseif $op=="tree_more"}
            {include file='tree_more.tpl'}
          {elseif $op=="tree_toolbox"}
            {include file='tree_toolbox.tpl'}
          {elseif $op=="tree_appearance_show"}
            {include file='tree_appearance_show.tpl'}
          {elseif $op=="tree_more_show"}
            {include file='tree_more_show.tpl'}                
          {else}
            {include file='tree_index.tpl'}
          {/if}
        </div>
    </div>
  </div>
  <!-- END tree_content -->
  <a id="back2Top" title="回頂部" href="#">&#10148;</a>
  {include file='footer.tpl'}
    <!-- END footer_tabs -->

	{include file='footer_script.tpl'}
  	<!-- END footer_script -->
    
</body>
</html>