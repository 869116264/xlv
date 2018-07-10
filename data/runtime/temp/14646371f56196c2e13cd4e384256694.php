<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"themes/admin_simpleboot3/data/data/remain.html";i:1528783136;s:97:"/Applications/XAMPP/xamppfiles/htdocs/thinkcmf/public/themes/admin_simpleboot3/public/header.html";i:1525682252;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/thinkcmf/public/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/thinkcmf/public/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/thinkcmf/public/",
            WEB_ROOT: "/thinkcmf/public/",
            JS_ROOT: "static/js/",
            APP: '<?php echo \think\Request::instance()->module(); ?>'/*当前应用名*/
        };
    </script>
    <script src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/thinkcmf/public/static/js/wind.js"></script>
    <script src="/thinkcmf/public/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container:'body',
                html:true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>
<style type="text/css">
    .table > thead > tr > th {
        vertical-align: bottom;
        border-bottom: 2px solid #ecf0f1;
        white-space: nowrap;
    }
</style>
</head>
<body>
<div class="wrap js-check-wrap">
    <!--<ul class="nav nav-tabs">-->
    <!--<li><a href="<?php echo url('data/base'); ?>">base数据</a></li>-->
    <!--<li class="active"><a href="javascript:;">remain数据</a></li>-->
    <!--</ul>-->
    <!--<form class="well form-inline margin-top-20" method="post" action="<?php echo url('data/remain'); ?>">-->
    <!--分类:-->
    <!--<select class="form-control" name="category" style="width: 140px;">-->
    <!--<option value='0'>全部</option>-->
    <!--<?php echo (isset($category_tree) && ($category_tree !== '')?$category_tree:''); ?>-->
    <!--</select> &nbsp;&nbsp;-->
    <!--时间:-->
    <!--<input type="text" class="form-control js-bootstrap-datetime" name="start_time"-->
    <!--value="<?php echo (isset($start_time) && ($start_time !== '')?$start_time:''); ?>"-->
    <!--style="width: 140px;" autocomplete="off">- -->
    <!--<input type="text" class="form-control js-bootstrap-datetime" name="end_time"-->
    <!--value="<?php echo (isset($end_time) && ($end_time !== '')?$end_time:''); ?>"-->
    <!--style="width: 140px;" autocomplete="off"> &nbsp;-->
    <!--关键字:-->
    <!--<input type="text" class="form-control" name="keyword" style="width: 200px;"-->
    <!--value="<?php echo (isset($keyword) && ($keyword !== '')?$keyword:''); ?>" placeholder="请输入关键字...">-->
    <!--<input type="submit" class="btn btn-primary" value="搜索"/>-->
    <!--<a class="btn btn-danger" href="<?php echo url('data/remain'); ?>">清空</a>-->
    <!--</form>-->
    <form class="js-ajax-form" action="" method="post">
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                    <th width="50"><?php echo lang('SORT'); ?></th>
                <?php endif; ?>
                <th width="50">注册日期</th>
                <th width="50">总人数</th>
                <th width="50">次留数</th>
                <th width="50">次留率</th>
                <th width="50">3留数</th>
                <th width="50">3留率</th>
                <th width="50">4留数</th>
                <th width="50">4留率</th>
                <th width="50">5留数</th>
                <th width="50">5留率</th>
                <th width="50">6留数</th>
                <th width="50">6留率</th>
                <th width="50">7留数</th>
                <th width="50">7留率</th>
                <th width="50">8留数</th>
                <th width="50">8留率</th>
                <th width="50">9留数</th>
                <th width="50">9留率</th>
                <th width="50">10留数</th>
                <th width="50">10留率</th>
                <th width="50">11留数</th>
                <th width="50">11留率</th>
                <th width="50">12留数</th>
                <th width="50">12留率</th>
                <th width="50">13留数</th>
                <th width="50">13留率</th>
                <th width="50">14留数</th>
                <th width="50">14留率</th>
                <th width="50">15留数</th>
                <th width="50">15留率</th>
                <th width="50">16留数</th>
                <th width="50">16留率</th>
                <th width="50">17留数</th>
                <th width="50">17留率</th>
                <th width="50">18留数</th>
                <th width="50">18留率</th>
                <th width="50">19留数</th>
                <th width="50">19留率</th>
                <th width="50">20留数</th>
                <th width="50">20留率</th>
                <th width="50">21留数</th>
                <th width="50">21留率</th>
                <th width="50">22留数</th>
                <th width="50">22留率</th>
                <th width="50">23留数</th>
                <th width="50">23留率</th>
                <th width="50">24留数</th>
                <th width="50">24留率</th>
                <th width="50">25留数</th>
                <th width="50">25留率</th>
                <th width="50">26留数</th>
                <th width="50">26留率</th>
                <th width="50">27留数</th>
                <th width="50">27留率</th>
                <th width="50">28留数</th>
                <th width="50">28留率</th>
                <th width="50">29留数</th>
                <th width="50">29留率</th>
                <th width="50">30留数</th>
                <th width="50">30留率</th>
            </tr>
            </thead>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
                <tr>
                    <td><b><?php echo $key; ?></b></td>
                    <td><b><?php echo $vo['all']; ?></b></td>
                    <td><b><?php echo $vo['2']; ?></b></td>
                    <td><b><?php echo $vo['2p']; ?>%</b></td>
                    <td><b><?php echo $vo['3']; ?></b></td>
                    <td><b><?php echo $vo['3p']; ?>%</b></td>
                    <td><b><?php echo $vo['4']; ?></b></td>
                    <td><b><?php echo $vo['4p']; ?>%</b></td>
                    <td><b><?php echo $vo['5']; ?></b></td>
                    <td><b><?php echo $vo['5p']; ?>%</b></td>
                    <td><b><?php echo $vo['6']; ?></b></td>
                    <td><b><?php echo $vo['6p']; ?>%</b></td>
                    <td><b><?php echo $vo['7']; ?></b></td>
                    <td><b><?php echo $vo['7p']; ?>%</b></td>
                    <td><b><?php echo $vo['8']; ?></b></td>
                    <td><b><?php echo $vo['8p']; ?>%</b></td>
                    <td><b><?php echo $vo['9']; ?></b></td>
                    <td><b><?php echo $vo['9p']; ?>%</b></td>
                    <td><b><?php echo $vo['10']; ?></b></td>
                    <td><b><?php echo $vo['10p']; ?>%</b></td>
                    <td><b><?php echo $vo['11']; ?></b></td>
                    <td><b><?php echo $vo['11p']; ?>%</b></td>
                    <td><b><?php echo $vo['12']; ?></b></td>
                    <td><b><?php echo $vo['12p']; ?>%</b></td>
                    <td><b><?php echo $vo['13']; ?></b></td>
                    <td><b><?php echo $vo['13p']; ?>%</b></td>
                    <td><b><?php echo $vo['14']; ?></b></td>
                    <td><b><?php echo $vo['14p']; ?>%</b></td>
                    <td><b><?php echo $vo['15']; ?></b></td>
                    <td><b><?php echo $vo['15p']; ?>%</b></td>
                    <td><b><?php echo $vo['16']; ?></b></td>
                    <td><b><?php echo $vo['16p']; ?>%</b></td>
                    <td><b><?php echo $vo['17']; ?></b></td>
                    <td><b><?php echo $vo['17p']; ?>%</b></td>
                    <td><b><?php echo $vo['18']; ?></b></td>
                    <td><b><?php echo $vo['18p']; ?>%</b></td>
                    <td><b><?php echo $vo['19']; ?></b></td>
                    <td><b><?php echo $vo['19p']; ?>%</b></td>
                    <td><b><?php echo $vo['20']; ?></b></td>
                    <td><b><?php echo $vo['20p']; ?>%</b></td>
                    <td><b><?php echo $vo['21']; ?></b></td>
                    <td><b><?php echo $vo['21p']; ?>%</b></td>
                    <td><b><?php echo $vo['22']; ?></b></td>
                    <td><b><?php echo $vo['22p']; ?>%</b></td>
                    <td><b><?php echo $vo['23']; ?></b></td>
                    <td><b><?php echo $vo['23p']; ?>%</b></td>
                    <td><b><?php echo $vo['24']; ?></b></td>
                    <td><b><?php echo $vo['24p']; ?>%</b></td>
                    <td><b><?php echo $vo['25']; ?></b></td>
                    <td><b><?php echo $vo['25p']; ?>%</b></td>
                    <td><b><?php echo $vo['26']; ?></b></td>
                    <td><b><?php echo $vo['26p']; ?>%</b></td>
                    <td><b><?php echo $vo['27']; ?></b></td>
                    <td><b><?php echo $vo['27p']; ?>%</b></td>
                    <td><b><?php echo $vo['28']; ?></b></td>
                    <td><b><?php echo $vo['28p']; ?>%</b></td>
                    <td><b><?php echo $vo['29']; ?></b></td>
                    <td><b><?php echo $vo['29p']; ?>%</b></td>
                    <td><b><?php echo $vo['30']; ?></b></td>
                    <td><b><?php echo $vo['30p']; ?>%</b></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <ul class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></ul>
    </form>
</div>
<script src="/thinkcmf/public/static/js/admin.js"></script>
<script>

    function reloadPage(win) {
        win.location.reload();
    }

    $(function () {
        setCookie("refersh_time", 0);
        Wind.use('ajaxForm', 'artDialog', 'iframeTools', function () {
            //批量复制
            $('.js-articles-copy').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/thinkcmf/public/index.php?g=portal&m=AdminArticle&a=copy&ids=" + ids, {
                    title: "批量复制",
                    width: "300px"
                });
            });
            //批量移动
            $('.js-articles-move').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/thinkcmf/public/index.php?g=portal&m=AdminArticle&a=move&old_term_id=<?php echo (isset($term['term_id']) && ($term['term_id'] !== '')?$term['term_id']:0); ?>&ids=" + ids, {
                    title: "批量移动",
                    width: "300px"
                });
            });
        });
    });
</script>
</body>
</html>