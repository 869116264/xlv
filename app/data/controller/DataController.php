<?php

namespace app\data\controller;

use app\data\model\CountBaseDatas;
use app\data\model\CountRemainDatas;
use cmf\controller\AdminBaseController;
use think\Controller;
use think\Request;

class DataController extends AdminBaseController
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }

    public function base()
    {
        $param = $this->request->param();
//        halt($param);
        $model = new CountBaseDatas();
        $datas = $model->paginate(10);
        $this->assign('data', $datas);
        $this->assign('page', $datas->render());
        return $this->fetch();
    }

    public function remain()
    {
        $param = $this->request->param();
//        halt($param);
        $model = new CountRemainDatas();
        $datas = $model->paginate(10);
        $this->assign('data', $datas);
        $this->assign('page', $datas->render());
        return $this->fetch();
    }
}

