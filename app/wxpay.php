<?php
/**
 * 微信支付配置文件
 */
return [
    'wxpay' => [
        'APPID' => 'wx7ab691081ebe036d',
        'MCHID' => '1488342042',
        'KEY' => 'iHeYBg8BOFNO9OyXyb7iNquLdpMA30VE',
        'APPSECRET' => '65f9f99f10e68d6d4930ac5b109bc47f',
        'NOTIFY_URL' => '你接收微信异步返回支付消息的网址',
        'SSLCERT_PATH' => '../cert/apiclient_cert.pem',
        'SSLKEY_PATH' => '../cert/apiclient_key.pem',
        'REPORT_LEVENL' => 1
    ]
];