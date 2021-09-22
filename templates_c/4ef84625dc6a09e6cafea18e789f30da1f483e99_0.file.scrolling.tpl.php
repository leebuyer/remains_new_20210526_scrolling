<?php
/* Smarty version 3.1.30, created on 2021-06-03 18:13:31
  from "D:\xampp\htdocs\remains_new_20210526_test\templates\scrolling.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60b8ffabef6bb8_91134494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef84625dc6a09e6cafea18e789f30da1f483e99' => 
    array (
      0 => 'D:\\xampp\\htdocs\\remains_new_20210526_test\\templates\\scrolling.tpl',
      1 => 1622736802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b8ffabef6bb8_91134494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/flatly/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href="css/site.css?v3" rel="stylesheet" type="text/css" />

<style>
.fas
{
    margin-right:4px !important; /*override*/
}

.pagination .fas
{
    margin-right:0px !important; /*override*/
}

.pagination a
{
    color:#fff;
}

.card ul
{
    padding:0px;
    margin:0px;
    list-style:none;
}

.news-item
{
    padding:4px 4px;
    margin:0px;
    border-bottom:1px dotted #555;
}
.img
{
    width: 60px;
    height: 50px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card panel-default">
                <div class="card-header text-center"> <span class="glyphicon glyphicon-list-alt">最新消息</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo1">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
                                    <li class="news-item">
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="img-thumbnail img-fluid img"></a>
                                                </td>
                                                <td>
                                                   <a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['summary_title'];?>
</a>
                                                </td>                                       
                                            </tr>
                                        </table>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer"> </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="scripts/jquery.bootstrap.newsbox.js?v3" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			      pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
