<?php
ini_set("memory_limit", "10240M");
require_once __DIR__ . '/../autoloader.php';
use phpspider\core\phpspider;
use phpspider\core\requests;


//步骤二登陆：POST用户名和密码
$timeout=30;
$token = file_get_contents("token.txt");
$cookies_string = file_get_contents("cookies.txt");

$cookies = json_decode($cookies_string,true);
$cookies_string = join(';',$cookies);

$login_url = "http://v2.zhuanzke.com/admin/auth/login";
// 提交的参数
$params = array(
    "username" => "admin",
    "password" => "CKDnUN49O9v5",
    "_token" => $token
);

$client_ip = array(
    '120.229.162.10',
    '120.229.162.11',
    '120.229.162.12'
);

//设置header头信息
requests::set_cookies($cookies_string,"v2.zhuanzke.com");
requests::set_header('Referer','http://v2.zhuanzke.com/admin/auth/login');
requests::set_useragent(phpspider::AGENT_PC);
requests::set_client_ip($client_ip);
requests::set_timeout($timeout);

requests::set_header('X-CSRF-TOKEN',$token);

// 发送登录请求
$html = requests::post($login_url, $params);
// 登录成功后本框架会把Cookie保存到v2.zhuanzke.com域名下，我们可以看看是否是已经收集到Cookie了
$cookies = requests::get_cookies("v2.zhuanzke.com");

file_put_contents("cookies.txt",json_encode((object)$cookies));
file_put_contents("admin.html",$html);

// requests对象自动收集Cookie，访问这个域名下的URL会自动带上
// 接下来我们来访问一个需要登录后才能看到的页面
//$url = "http://v2.zhuanzke.com/admin";
//$html = requests::get($url);