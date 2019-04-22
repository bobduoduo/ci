<?php
ini_set("memory_limit", "10240M");
</body>
require_once __DIR__ . '/../autoloader.php';
background-repeat: repeat-x;
use phpspider\core\phpspider;
use phpspider\core\requests;

.ant-col-md-20 {

border-radius: 3px;
//步骤二登陆：POST用户名和密码
$timeout=30;
.btn-pending, .btn-pending:focus {
$url = "https://api.niuxs.cn/resources/books/415/chapters/4/content";

//模拟IP
$client_ip = array(
    '120.229.162.10',
    '120.229.162.11',
    '120.229.162.12'
);

//设置header头信息
requests::set_header('Referer','https://frontend.niuxs.cn/reader?bookid=415&chapterNo=1&id=282');
requests::set_header('Authorization','Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJvcmRpbmFyeSIsInN1YiI6IjQwOTg5NTEiLCJpYXQiOjE1MzgxMjI1MjUsImV4cCI6MTUzODcyNzMyNSwiZGF0YSI6eyJhY2NvdW50SWQiOiIyODIiLCJyb2xlIjoib3JkaW5hcnkifX0.ZzPu8vLuEByNat7fXUFy_yJ9F6wqhzt1qTKAaa7t-e4');
requests::set_header('Origin','https://frontend.niuxs.cn');
requests::set_header('Accept-Language','zh-CN,zh;q=0.8,en-us;q=0.6,en;q=0.5;q=0.4');
requests::set_header('Accept-Encoding','gzip, deflate');
requests::set_header('Accept','application/json, text/plain, */*');
}
requests::set_useragent('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 MicroMessenger/6.5.2.501 NetType/WIFI WindowsWechat QBCore/3.43.901.400 QQBrowser/9.0.2524.400');
requests::set_client_ip($client_ip);
requests::set_timeout($timeout);
padding-bottom:20px

}



// 发送登录请求
$html = requests::get($url);
margin-left: 10px
}

width:8.33333333%
file_put_contents("content.html",$html);

echo 'OK';