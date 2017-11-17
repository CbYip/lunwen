<?php

namespace app\index\controller;
use app\index\controller\common;
use think\Db;
use lib\class_wechat;

class Table extends common
{
    //论文订单列表
    public function order_list(){
        $order = Db::name('order')->order("ID desc")->paginate(10);
        foreach ($order as $k => $value){
            $value['ctime'] = date("Y-m-d", $value['ctime']);
            $order[$k] = $value;
        }
        //联动分类
        if(request()->isAjax()){
            $data = array(
                "service" => input('id'),
                "flag" => input('oid'),
                "complete" => input('rid'),
            );
            //三级联动查询
            if($data['service'] == "0" && $data['flag'] == "a"){
                $result = Db::name('order')->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }else if($data['service'] != "0" && $data['flag'] == "a" && $data['complete'] == "b"){
                $result = Db::name('order')->where('service', $data['service'])->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }else if($data['service'] != "0" && $data['flag'] != "a" && $data['complete'] == "b"){
                $result = Db::name('order')->where('service',$data['service'])->where('flag', $data['flag'])->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }else if($data['service'] != "0" && $data['flag'] == "a" && $data['complete'] != "b"){
                $result = Db::name('order')->where('service',$data['service'])->where('complete', $data['complete'])->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }else if($data['service'] != "0" && $data['flag'] != "a" && $data['complete'] != "b"){
                $result = Db::name('order')->where($data)->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }else if($data['service'] == "0" && $data['flag'] != "a"){
                $result = Db::name('order')->where('flag', $data['flag'])->select();
                foreach ($result as $k => $value){
                    $value['ctime'] = date('Y-m-d', $value['ctime']);
                    $result[$k] = $value;
                }
            }
            return $result;
        }
        $this->assign('order', $order);
        return $this->fetch();
    }

    //论文订单详情
    public function order_list_detail(){
        $order = input('order');
        $detail = Db::name('order')->where('order', $order)->find();
        $detail['ctime'] = date("Y-m-d", $detail['ctime']);
        if(request()->isPost()){
            $order = input('order');
            $data = array(
                "username" => input('Name'),
                "title" => input('Title'),
                "usertel" => input('Tel'),
                "price" => input('Price'),
                "word" => input("Word"),
                "service" => input("service"),
                "ctime" => strtotime(input("Ctime")),
                "type" => input("Type"),
                "major" => input("Major"),
                "require" => input("Require"),
                "level" => input("Level"),
                "fatime" => input("fatime"),
                "nowrep" => input("nowrep"),
                "repeat" => input("repeat"),
            );
            if($data['ctime'] == ""){
                $data['ctime'] = '0';
            }
            $result = Db::name('order')->where('order', $order)->setField($data);
            if($result){
                echo "<script>alert('修改成功！');window.location.href='".url('table/order_list')."'</script>";
            }else{
                echo "<script>alert('您还没有修改，请勿重复提交！');</script>";
            }

        }
        $this->assign('detail', $detail);
        return $this->fetch();
    }

    //更新付款信息
    public function pay(){
        if(request()->isAjax()){
            $order = input('order');
            $result = Db::name('order')->where('order', $order)->setField('flag', 0);

            //发送模板消息和增加积分
            if($result != 0){
                $list = Db::name('order')->where('order', $order)->find();
                $list['ftime'] = date("Y-m-d H:i:s", $list['ftime']);
                $user_obj = Db::name('user')->where('WID', $list['WID'])->find();

                //增加积分
                $jifen = Db::name('jifen')->where('ID = 1')->find();
                $add_score = $user_obj['score'] + (int)round($list['price'] * ($jifen['lunwen']/100));
                Db::name('user')->where('WID', $list['WID'])->setField('score', $add_score);

                //推荐返积分
                $extend = Db::name('extend')->where('Fopenid', $user_obj['openid'])->find();
                $extend_user = Db::name('user')->where('ID', $extend['EventKey'])->find();
                $extend_user_score = $extend_user['score'] + (int)round($list['price'] * ($jifen['tuijian']/100));
                Db::name('user')->where('ID', $extend['EventKey'])->setField('score', $extend_user_score);

                $template = array(
                    'touser' => $user_obj['openid'],
                    'template_id' => "__YobErg2e91k5Ls-AtMRKpkRxbgKTYFV6MA3VZFAAc",
                    'topcolor' => '#FF0000',
                    'url' =>  'lunwen.jiezanke.com/index.php/index/weixin/getordercode',
                    'data' => array(
                        'first'=> array('value'=>"尊敬的用户，我们已收到您的付款信息，开始为您的项目开工。", 'color'=>"#00f"),
                        'keyword1' => array('value' => $list['price']."元", 'color'=>"#FF0000"),
                        'keyword2' => array('value' => $list['order'], 'color'=>"#000"),
                        'Remark' => array('value'=>"如有问题请联系公众号的客服人员，感谢您的支持！",'color'=>'#000'),
                    )
                );
                $wechat = new class_wechat();
                $wechat->send_template_message(json_encode($template));
            }

            return $result;
        }
    }

    //订单审核
    public function check(){
        if(request()->isAjax()){
            $order = input('order');
            $result = Db::name('order')->where('order', $order)->setField('flag', 1);

            //发送模板消息
            if($result != 0){
                $list = Db::name('order')->where('order', $order)->find();
                $list['ftime'] = date("Y-m-d H:i:s", $list['ftime']);
                $user_obj = Db::name('user')->where('WID', $list['WID'])->find();

                $template = array(
                    'touser' => $user_obj['openid'],
                    'template_id' => "WZnBB3cOfXDX-XMYgCnMa86lCLOIomIyByY2qLU2iLk",
                    'topcolor' => '#FF0000',
                    'url' =>  'lunwen.jiezanke.com/index.php/index/weixin/getordercode',
                    'data' => array(
                        'first'=> array('value'=>"尊敬的用户，您有一笔订单已经通过审核，等待您的付款。", 'color'=>"#00f"),
                        'keyword1' => array('value' => $list['ftime'], 'color'=>"#000"),
                        'keyword2' => array('value' => "论文订单", 'color'=>"#000"),
                        'keyword3' => array('value' => $list['price']."元", 'color'=>"#FF0000"),
                        'keyword4' => array('value' => "您付款完之后，我们会立即对项目进行开工。", 'color'=>"#000"),
                        'remark' => array('value'=>"感谢您对易起论文网的信任与支持！",'color'=>'#000'),
                    )
                );
                $wechat = new class_wechat();
                $wechat->send_template_message(json_encode($template));
            }

            return $result;
        }
    }

    //项目进度修改事件
    public function schedule(){
        if(request()->isAjax()){
            $data = array(
                "complete" => input('id'),
                "order" => input('order'),
            );
            $result = Db::name('order')->where('order', $data['order'])->setField('complete', $data['complete']);
            return $result;
        }
    }

    //订单删除
    public function delete(){
        if(request()->isAjax()){
            $order = input('order');
            $result = Db::name('order')->where('order', $order)->delete();

            return $result;
        }
    }
}