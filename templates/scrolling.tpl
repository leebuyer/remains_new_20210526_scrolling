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
                                {foreach from=$all item=article}
                                    <li class="news-item">
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href="index.php?sn={$article.sn}"><img src="{$article.pic}" alt="{$article.title}" class="img-thumbnail img-fluid img"></a>
                                                </td>
                                                <td>
                                                   <a href="index.php?sn={$article.sn}">{$article.summary_title}</a>
                                                </td>                                       
                                            </tr>
                                        </table>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer"> </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="scripts/jquery.bootstrap.newsbox.js?v3" type="text/javascript"></script>
<script type="text/javascript">
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
</script>
