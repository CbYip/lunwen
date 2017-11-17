<?php

namespace app\index\controller;
use think\Controller;
use lib\class_wechat;

class Weixin extends Controller
{
    private $Appid;
    private $AppSecret;
    private $Token;
    //初始化

    public function _initialize()
    {
        $this->Appid = "wx7ab691081ebe036d";
        $this->AppSecret = "65f9f99f10e68d6d4930ac5b109bc47f";
        $this->Token = "weixin";
        parent::_initialize();
        \think\Url::root('/index.php');
    }

    public function index(){

    }

    //创建自定义菜单
    public function menu(){
        $weObj = new class_wechat();
        //设置菜单
        $newmenu = array(
            "button" =>
                array(
                    array('name' => '论文服务', "sub_button" => array(
                        array('type' => 'view', 'name' => '发起订单', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/getlunwencode.html'),
                        array('type' => 'view', 'name' => '业务介绍', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/getbusinesscode.html'),
                    )),
                    array('type' => 'view', 'name' => '论文学院', 'url' => 'http://mp.weixin.qq.com/mp/homepage?__biz=MzI1OTg1Mzk2NQ==&hid=1&sn=bfd8781531bb3887e8b538c0060ff87d#wechat_redirect'),
                    array('name' => '客服中心', "sub_button" => array(
                        array('type' => 'view', 'name' => '积分商城', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/getshopcode.html'),
                        array('type' => 'view', 'name' => '个人中心', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/getpersoncode.html'),
                        array('type' => 'view', 'name' => '合作期刊', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/gettransfercode.html'),
                        array('type' => 'view', 'name' => '联系方式', 'url' => 'http://lunwen.jiezanke.com/index.php/index/weixin/getcontactcode.html'),
                        array('type' => 'click', 'name' => '在线咨询', 'key' => 'photo'),
                    )),
                )
        );
        $newmenu = json_encode($newmenu, JSON_UNESCAPED_UNICODE);
        $result = $weObj->menuSet($newmenu);

        var_dump($result);
    }

    /*
     * 上传永久素材
     */
    public function upload(){
        $weObj = new class_wechat();
        $file = "./lianxi.jpg";
        $result = $weObj->uploadTmp($file, 'image');
        var_dump($result);
    }

    /*
     * 商城getCode
     */
    public function getshopcode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/index/shop.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 订单getCode
     */
    public function getordercode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/member/myorder.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 发起订单getcode
     */
    public function getlunwencode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/index/order.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 服务指南
     */
    public function getfuwucode(){

    }

    /*
     * 个人中心getperson
     */
    public function getpersoncode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/member/index.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 联系方式
     */
    public function getcontactcode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/index/contact.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 汇款方式
     */
    public function gettransfercode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/index/transfer.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }

    /*
     * 业务介绍
     */
    public function getbusinesscode(){
        $REDIRECT_URI='http://lunwen.jiezanke.com/index.php/index/index/business.html';
        $state='123';
        $scope='snsapi_userinfo';//需要授权
        $url='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$this->Appid.'&redirect_uri='.urlencode($REDIRECT_URI).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';

        header("Location:".$url);
    }
}