<?php
namespace app\index\model;
use think\Model;
class Goods extends Model
{
    //自定义初始化
    protected function initialize()
    {
    //需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    //验证添加商品的内容
    public function check($data){

    }

    //单图片上传
    public function upload1($image){
        $file = $image;
        $savepath = "/public/uploads/";
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
         // 成功上传后 获取上传信息
            $imageurl = str_replace('\\',"/",$savepath.$info->getSaveName());
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
        return $imageurl;
    }

    //图片批量上传 + 验证
    public function upload($image)
    {
        $files = $image;
        foreach ($files as $k => $file) {
            $savepath = "/public/uploads/";
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                // 成功上传后 获取上传信息
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                $imageurl[$k] = str_replace('\\',"/",$savepath.$info->getSaveName());
            } else {
             // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        return $imageurl;
    }
}