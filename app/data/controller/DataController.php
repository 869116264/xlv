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
        $model = new CountBaseDatas();
        $datas = $model->order('sdate desc')->paginate(10);
        $this->assign('data', $datas);
        $this->assign('page', $datas->render());
        return $this->fetch();
    }

    public function remain()
    {

        $param = $this->request->param();
        //获取当前页码
        $nowPage = isset($param['page']) ? $param['page'] : 1;
        //每一页展示多少天的数据?
        $pageNum = 2;
        $model = new CountRemainDatas();
        $baseModel = new CountBaseDatas();
        //计算页的偏移量
        $rightOffSet = $nowPage * $pageNum + 2;
        $leftOffSet = $rightOffSet - $pageNum;
        $datas = $model->where('reg_date', 'exp',
            '>= date_sub(now(),interval ' . $rightOffSet . ' day)')->where('reg_date', 'exp',
            '<= date_sub(now(),interval ' . $leftOffSet . ' day)')->order('login_date desc,reg_date desc')->select();

        $newRow = [
            "all" => 0,
            "2" => 0,
            "3" => 0,
            "4" => 0,
            "5" => 0,
            "6" => 0,
            "7" => 0,
            "8" => 0,
            "9" => 0,
            "10" => 0,
            "11" => 0,
            "12" => 0,
            "13" => 0,
            "14" => 0,
            "15" => 0,
            "16" => 0,
            "17" => 0,
            "18" => 0,
            "19" => 0,
            "20" => 0,
            "21" => 0,
            "22" => 0,
            "23" => 0,
            "24" => 0,
            "25" => 0,
            "26" => 0,
            "27" => 0,
            "28" => 0,
            "29" => 0,
            "30" => 0,
            "31" => 0,
            "32" => 0,
            "33" => 0,
            "34" => 0,
            "2p" => 0,
            "3p" => 0,
            "4p" => 0,
            "5p" => 0,
            "6p" => 0,
            "7p" => 0,
            "8p" => 0,
            "9p" => 0,
            "10p" => 0,
            "11p" => 0,
            "12p" => 0,
            "13p" => 0,
            "14p" => 0,
            "15p" => 0,
            "16p" => 0,
            "17p" => 0,
            "18p" => 0,
            "19p" => 0,
            "20p" => 0,
            "21p" => 0,
            "22p" => 0,
            "23p" => 0,
            "24p" => 0,
            "25p" => 0,
            "26p" => 0,
            "27p" => 0,
            "28p" => 0,
            "29p" => 0,
            "30p" => 0,
            "31p" => 0,
            "32p" => 0,
            "33p" => 0,
            "34p" => 0,
        ];
        //经过转换后,最终需要输出的数据
        $finalDatas = [];
        //遍历整个数据集,进行计算
        foreach ($datas as $data) {
            if (!array_key_exists($data['reg_date'], $finalDatas)) {
                $finalDatas[$data['reg_date']] = $newRow;
                //查询当天注册的总人数,并入最终结果
                if ($amount = $baseModel->field('day_reg_num')->where('sdate', '=', $data['reg_date']
                )->find()) {
                    $finalDatas[$data['reg_date']]["all"] = $amount['day_reg_num'];
                }
            }
            //给留存数赋值
            $finalDatas[$data['reg_date']][$data['remain_day']] = $data['num'];
            //计算留存率
            if ($finalDatas[$data['reg_date']]["all"] != 0) {
                $dataPercent = $data['remain_day'] . 'p';
                $finalDatas[$data['reg_date']][$dataPercent] = round(floatval(intval($data['num']) / intval($finalDatas[$data['reg_date']]["all"])) * 100,
                    2);
            }
        }
        //因为我们最终输出的结果的行数是与 base 表行数一一对应的,所以通过base 表取出分页器
        $baseData = $baseModel->where('sdate', 'exp',
            '<= date_sub(now(),interval 1  day)')->paginate($pageNum);
        $this->assign('data', $finalDatas);
        $this->assign('page', $baseData->render());
        return $this->fetch();
    }
}

