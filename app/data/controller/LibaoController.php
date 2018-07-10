<?php
/**
 * Created by PhpStorm.
 * User: fanzixiao
 * Date: 2018/7/10
 * Time: 上午11:24
 */

namespace app\data\controller;

use app\data\model\CountBaseDatas;
use app\data\model\CountRemainDatas;
use cmf\controller\AdminBaseController;
use think\Controller;
use think\Db;
use think\Request;


class LibaoController extends AdminBaseController
{
    public function add()
    {
        return $this->fetch();
    }
}