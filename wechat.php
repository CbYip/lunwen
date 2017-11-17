<?php
require_once "./extend/lib/class_wechat.php";
define("TOKEN", "weixin");
$wechatObj = new \lib\class_wechat();
if (!isset($_GET['echostr'])) {
    $wechatObj->responseMSG();
}else{
    $wechatObj->firstValid();
}
?>