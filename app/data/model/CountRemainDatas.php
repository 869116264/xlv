<?php

namespace app\data\model;

use think\Model;

class CountRemainDatas extends Model
{
    //
    protected $table = 'count_remain_datas';
    protected $connection = [
        // 数据库类型
        'type' => 'mysql',
        // 服务器地址
        'hostname' => 'mysql56.rdsm0qalgn5tvgb.rds.bj.baidubce.com',
        // 数据库名
        'database' => 'xlcount',
        // 数据库用户名
        'username' => 'rdsroot',
        // 数据库密码
        'password' => 'YsmbchhN',
        // 数据库连接端口
        'hostport' => '3306',
        // 数据库连接参数
        'params' => [],
        // 数据库编码默认采用utf8
        'charset' => 'utf8',
        // 数据库表前缀
        'prefix' => '',
        // 数据库调试模式
        'debug' => false,
    ];
}
