<!DOCTYPE html>
<html lang="zh-TW">

<head>
  {include file='head.tpl'}
</head>

<body id="body" class="w-100">

  {include file='admin_banner.tpl'}
  
  <div class="container">    
    <div class="row">  
      <div class="col-md-8">
        {if $op=="article_form"}
          {include file='article_form.tpl'}          
        {elseif $op=="tree_action_form"}
          {include file='tree_action_form.tpl'}
        {elseif $op=="tree_appearance_form"}
          {include file='tree_appearance_form.tpl'}
        {elseif $op=="tree_more_form"}
          {include file='tree_more_form.tpl'}
        {elseif $op=="tree_toolbox_form"}
          {include file='tree_toolbox_form.tpl'}
        {elseif $op=="tiger_reason_form"}
          {include file='tiger_reason_form.tpl'}
        {elseif $op=="tiger_action_form"}
          {include file='tiger_action_form.tpl'}
        {elseif $op=="tiger_appearance_form"}
          {include file='tiger_appearance_form.tpl'}
        {elseif $op=="tiger_more_form"}
          {include file='tiger_more_form.tpl'}
        {elseif $op=="tiger_toolbox_form"}
          {include file='tiger_toolbox_form.tpl'}
        {else}
          {include file='tree_reason_form.tpl'}
        {/if}
      </div>
      <div class="col-md-4">
        {include file='admin_side.tpl'}
      </div>
      {include file='footer_script.tpl'}
      <!-- END footer_script -->
    </div>
  </div>
</body>

</html>