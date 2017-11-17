<?php
namespace app\index\controller;
use app\index\controller\common;
use think\Db;
use think\Session;

class Index extends common
{
    //后台首页
    public function index()
    {
        $id = Session::get('id');
        $user = Db::name('user')->select();
        $order = Db::name('order')->select();
        $goods = Db::name('goods')->select();
        $shoporder = Db::name('shoporder')->select();
        $jifen = Db::name('jifen')->where("ID=1")->find();
        $reply = Db::name('weixin')->select();
        $user_rank = Db::name('user')->order('score desc')->limit(8)->select();

        //联系方式
        $contact = Db::name('set')->where('ID = 6')->find();
        $contact['content'] = json_decode($contact['content']);

        //汇款方式
        $transfer = Db::name('set')->where('ID = 5')->find();
        $transfer['content'] = json_decode($transfer['content']);

        //业务介绍
        $business = Db::name('set')->where('ID = 7')->find();
        $business['content'] = json_decode($business['content']);

        //关键字
        $keywords = Db::name('keywords')->select();

        $data = array(
            "user" => count($user),
            "order" => count($order),
            "goods" => count($goods),
            "shoporder" => count($shoporder),
        );

        if(request()->isPost()){
            //更改微信公众号欢迎语
            $data_jifen = array(
                "shop" => input('shop'),
                "tuijian" => input('tuijian'),
                "qiandao" => input('qiandao'),
                "lunwen"  => input('lunwen'),
                "welcome" => input('welcome'),
            );
            Db::name('jifen')->where('ID=1')->setField($data_jifen);

            $this->redirect('index/index');
        }
        $this->assign('data', $data);
        $this->assign('jifen', $jifen);
        $this->assign('reply', $reply);
        $this->assign('user_rank', $user_rank);
        $this->assign('contact', $contact['content'][0]);
        $this->assign('transfer', $transfer['content'][0]);
        $this->assign('business', $business['content'][0]);
        $this->assign('keywords', $keywords);
        return $this->fetch();
    }

    //联系方式管理
    public function contact(){
        if(request()->isAjax()){
            $content = $_POST['content'];
            $id = input('id');
            $res = Db::name('set')->where("ID", $id)->find();
            if($res != null){
                $content = json_encode($content);
                $result = Db::name('set')->where("ID", $id)->setField('content', $content);
            }else{
                $content = json_encode($content);
                $data = array(
                    "content" => $content,
                    "date" => date("Y-m-d", time()),
                );
                $result = Db::name('set')->insert($data);
            }
            return $result;
        }
    }

    //用户管理
    public function chart(){
        $user = Db::name('user')->order('ID desc')->paginate(10);
        $this->assign('user', $user);
        return  $this->fetch();
    }

    //用户管理详情
    public function chart_detail(){
        $id = input('id');
        $user = Db::name('user')->where('ID', $id)->find();
        if(request()->isPost()){
            $data = array(
                "name" => input('name'),
                "WID" => input('WID'),
                "nickname" => input('nickname'),
                "tel" => input('tel'),
                "balance" => input('balance'),
                "score" => input('score'),
                "email" => input('email'),
                "date" => input('date'),
            );
            $result = Db::name('user')->where('ID', $id)->setField($data);
            if($result){
                echo "<script>alert('修改成功！');window.location.href='".url('index/chart')."'</script>";
            }else{
                echo "<script>alert('修改成功！');window.history.go(-1)</script>";
            }
        }
        $this->assign('user', $user);
        return $this->fetch();
    }

    //退出登录
    public function logout(){
        if(request()->isAjax()){
            Session::clear();
            return 1;
        }
    }

    //管理员资料
    public function admin(){
        $data = Db::name('admin')->where('id=1')->find();
        $this->assign('data', $data);
        if(request()->isAjax()){
            $data = array(
                'password' => input('password'),
                'email' => input('email'),
            );
            if($data['password'] == ""){
                $result = Db::name('admin')->where('ID', input('id'))->setField('email', $data['email']);
            }else{
                $data['password'] = md5($data['password']);
                $result = Db::name('admin')->where('ID', input('id'))->setField($data);
            }
            return $result;
        }
        return $this->fetch();
    }

    //常见问题设置
    public function question(){
        $question = Db::name('question')->paginate(10);
        $this->assign('question', $question);
        return $this->fetch();
    }

    //常见问题添加
    public function question_add(){
        if(request()->isPost()){
            $title = $_POST['title'];
            $content = $_POST['content'];

            $question = question_arr($title, $content);
            $result = Db::name('question')->insertAll($question);
            if($result){
                echo "<script>alert('数据添加成功！'); window.location.href='".url('index/question')."'</script>";
            }else{
                echo "<script>alert('数据添加失败！'); window.location.reload();</script>";
            }
        }
        return $this->fetch();
    }

    //常见问题编辑
    public function question_edit(){
        $id = input('id');
        $question = Db::name('question')->where('ID', $id)->find();

        if(request()->isPost()){
            $data = array(
                "title" => input('title'),
                "content" => input('content'),
            );
            $result = Db::name('question')->where('ID', $id)->setField($data);
            if($result){
                echo "<script>alert('修改成功！'); window.location.href='".url('index/question')."'</script>";
            }else{
                echo "<script>alert('您没有进行任何修改的操作！'); window.location.href='".url('index/question')."'</script>";
            }
        }
        $this->assign("question", $question);
        return $this->fetch();
    }

    //批量删除常见问题
    public function delete_all(){
        if(request()->isAjax()){
            $temp = input('temp');
            $newtemp = substr($temp,0,strlen($temp)-1);
            $temparr = explode(",", $newtemp);
            $result = Db::name('question')->delete($temparr);
            return $result;
        }
    }

    //删除单个常见问题
    public function delete_one(){
        if(request()->isAjax()){
            $id = input('id');
            $result = Db::name('question')->delete($id);
            return $result;
        }
    }

    /**
     * 关键字设置
     */
    public function keywords(){
        if(request()->isAjax()){
            $id = input('id');
            $data = array(
                "keywords" => input('keywords'),
                "content"  => input('content'),
            );
            $result = Db::name('keywords')->where('id', $id)->setField($data);
            return $result;
        }
    }
}

