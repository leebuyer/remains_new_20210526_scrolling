<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    {include file='head.tpl'}
    <!-- END head -->
</head>
<body id="body" class="w-100">
		
    {if $op=="tiger.php"}
        {include file="tiger_nav.tpl"}
    {elseif $op=="tree.php"}
        {include file='tree_nav.tpl'}
    {else}
        {include file='nav.tpl'}
    {/if}
    <!-- END nav -->
    <div class="d-none d-sm-block">
        {include file='banner.tpl'}
    </div>
    <!-- END banner -->

    {include file='web_entrance.tpl'}
 	<!-- END web_entrance -->
    <a id="back2Top" title="回頂部" href="#">&#10148;</a>
    {include file='footer.tpl'}
    <!-- END footer -->

  	{include file='footer_script.tpl'}
  	<!-- END footer_script -->

</body>
</html>