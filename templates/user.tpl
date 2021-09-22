<!DOCTYPE html>
<html lang="zh-TW">

<head>
  {include file='head.tpl'}
</head>

<body id="body" class="w-100">

  {include file='user_banner.tpl'}
  
  <div class="container">    
    <div class="row">  
      <div class="col-md-8">          
        {if $op=="user_form"}
          {include file="user_form.tpl"}
        {elseif $op=="display_user"}
          {include file='display_user.tpl'}
        {else}
          {include file='user_form.tpl'}
        {/if}
      </div>
      <div class="col-md-4">
        {include file='user_side.tpl'}
      </div>
      {include file='footer_script.tpl'}
      <!-- END footer_script -->
    </div>
  </div>
</body>

</html>

