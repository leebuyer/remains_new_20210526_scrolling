<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    {include file='head.tpl'}
    <!-- END head -->
</head>
<body id="body" class="w-100">
  {if $op=="index.php"}
    {include file="nav.tpl"}
  {elseif $op=="tree.php"}
    {include file='tree_nav.tpl'}
  {else}
    {include file='tiger_nav.tpl'}
  {/if}
  
  <!-- END tiger_nav -->

  {include file='banner_tiger.tpl'}
  <!-- END banner -->

  <div class="container mt-3">
      <div class="row">
          <div class="col-sm-12">
            {if $op=="tiger_action"}
              {include file="tiger_action.tpl"}
            {elseif $op=="tiger_reason"}
              {include file='tiger_reason.tpl'}
            {elseif $op=="tiger_appearance"}
              {include file='tiger_appearance.tpl'}
            {elseif $op=="tiger_more"}
              {include file='tiger_more.tpl'}
            {elseif $op=="tiger_toolbox"}
              {include file='tiger_toolbox.tpl'}
            {elseif $op=="tiger_appearance_show"}
              {include file='tiger_appearance_show.tpl'}
            {elseif $op=="tiger_more_show"}
              {include file='tiger_more_show.tpl'}                
            {else}
              {include file='tiger_index.tpl'}
            {/if}
          </div>
      </div>
  </div>
  <!-- END tiger_content -->
  <a id="back2Top" title="回頂部" href="#">&#10148;</a>
  {include file='footer.tpl'}
  <!-- END footer -->

	{include file='footer_script.tpl'}
	<!-- END footer_script -->
    
</body>
</html>
