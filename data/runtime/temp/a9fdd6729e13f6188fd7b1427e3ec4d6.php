<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"themes/admin_simpleboot3/data/data/base.html";i:1526266780;s:97:"/Applications/XAMPP/xamppfiles/htdocs/thinkcmf/public/themes/admin_simpleboot3/public/header.html";i:1525682252;}*/ ?>
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
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="javascript:;">base数据</a></li>
        <li><a href="<?php echo url('data/remain'); ?>">remain数据</a></li>
    </ul>
    <form class="well form-inline margin-top-20" method="post" action="<?php echo url('data/base'); ?>">
        分类:
        <select class="form-control" name="category" style="width: 140px;">
            <option value='0'>全部</option>
            <?php echo (isset($category_tree) && ($category_tree !== '')?$category_tree:''); ?>
        </select> &nbsp;&nbsp;
        时间:
        <input type="text" class="form-control js-bootstrap-datetime" name="start_time"
               value="<?php echo (isset($start_time) && ($start_time !== '')?$start_time:''); ?>"
               style="width: 140px;" autocomplete="off">-
        <input type="text" class="form-control js-bootstrap-datetime" name="end_time"
               value="<?php echo (isset($end_time) && ($end_time !== '')?$end_time:''); ?>"
               style="width: 140px;" autocomplete="off"> &nbsp;
        关键字:
        <input type="text" class="form-control" name="keyword" style="width: 200px;"
               value="<?php echo (isset($keyword) && ($keyword !== '')?$keyword:''); ?>" placeholder="请输入关键字...">
        <input type="submit" class="btn btn-primary" value="搜索"/>
        <a class="btn btn-danger" href="<?php echo url('data/base'); ?>">清空</a>
    </form>
    <form class="js-ajax-form" action="" method="post">
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                    <th width="50"><?php echo lang('SORT'); ?></th>
                <?php endif; ?>
                <th width="50">ID</th>
                <th>sdate</th>
                <th>all_reg_num</th>
                <th width="50">day_reg_num</th>
                <th width="65">active_num</th>
                <th width="65">pcu</th>
                <th width="160">acu</th>
                <th width="130">heart_user_avg_time</th>
                <th width="130">heart_user_num</th>
            </tr>
            </thead>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$vo): ?>
                <tr>
                    <td><b><?php echo $vo['id']; ?></b></td>
                    <td><b><?php echo $vo['sdate']; ?></b></td>
                    <td><b><?php echo $vo['all_reg_num']; ?></b></td>
                    <td><b><?php echo $vo['day_reg_num']; ?></b></td>
                    <td><b><?php echo $vo['active_num']; ?></b></td>
                    <td><b><?php echo $vo['pcu']; ?></b></td>
                    <td><b><?php echo $vo['acu']; ?></b></td>
                    <td><b><?php echo $vo['heart_user_avg_time']; ?></b></td>
                    <td><b><?php echo $vo['heart_user_num']; ?></b></td>
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