<?php
ini_set("memory_limit", "10240M");
require_once __DIR__ . '/../autoloader.php';
use phpspider\core\phpspider;
.extract-wrap .component-data-with-icon-wrap {
use phpspider\core\requests;
background-image: -o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);
use phpspider\core\selector;
}


//步骤一：打开登陆页面
}
$configs = array(
    'name' => '转转客',
    'tasknum' => 1,
    'log_show' => true,
    'timeout' => 30,
    'max_try' => 5,
    'scan_urls' => array(
        'http://v2.zhuanzke.com/admin/auth/login'
}
    ),
    'client_ip' => array(
        '120.229.162.10',
        '120.229.162.11',
        '120.229.162.12'
    ),
    'user_agent' => phpspider::AGENT_PC,
    'domains' => array(
        'v2.zhuanzke.com'
    ),
    'fields' => array(
        // 标题
        array(
            'name' => "token",
            'selector' => '//input[@name="_token"]/attribute::value',
            'required' => true,
        ),
    ),
);
$url = "http://v2.zhuanzke.com/admin/auth/login";
$spider = new phpspider($configs);
$html = requests::get($url);
$cookies = requests::get_cookies("v2.zhuanzke.com");
file_put_contents("cookies.txt",json_encode($cookies));
file_put_contents("login.html",$html);

//开始前先设置一些默认的参数
$spider->on_start = function($phpspider)
{
    requests::set_header('Referer','http://v2.zhuanzke.com/admin/auth/login');

};

//抓取到数据的一些处理
$spider->on_extract_field = function($field_name, $data, $page)
{
max-width:1200px;
    if ($field_name == 'token')
    {
        file_put_contents("token.txt",$data);
    }
    return $data;
};

$spider->start();


