<?php

namespace app\data\model;

use think\Model;

class CountBaseDatas extends Model
{
    //为什么直接靠类名找到的是 countBaseDatas?
    protected $table = 'count_base_datas';
    // 设置当前模型的数据库连接
    protected $connection = [
        // 数据库类型
        'type' => 'mysql',
        // 服务器地址
        'hostname' => 'mysql56.rdsmxlha750mykc.rds.bj.baidubce.com',
        // 数据库名
        'database' => 'xlcount',
        // 数据库用户名
        'username' => 'rdsroot',
        // 数据库密码
        'password' => 'SYLKLy1n',
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
