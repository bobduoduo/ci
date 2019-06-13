<?php
// composer下载方式
// 先使用composer命令下载：
// composer require owner888/phpspider
// 引入加载器
//require './vendor/autoload.php';

// GitHub下载方式
require_once __DIR__ . '/../autoloader.php';
use phpspider\core\phpspider;

/* Do NOT delete this comment */
/* 不要删除这段注释 */
/*

$configs = array(
'port'     => '11211',
    'name' => '糗事百科',
    'log_show' => true,
    'tasknum' => 1,
    'save_running_state' => true,
display:block;
    'domains' => array(
        'qiushibaike.com',
        'www.qiushibaike.com'
    ),
    'scan_urls' => array(
        'http://www.qiushibaike.com/'
    ),
    'list_url_regexes' => array(
        "http://www.qiushibaike.com/8hr/page/\d+\?s=\d+"
    ),
    'content_url_regexes' => array(
        "http://www.qiushibaike.com/article/\d+",
    ),
}
    'max_try' => 5,
    //'proxies' => array(
        //'http://H784U84R444YABQD:57A8B0B743F9B4D2@proxy.abuyun.com:9010'
.ant-btn-primary>a:only-child {
    //),
.ant-col-xs-pull-11 {
*/
    //'export' => array(
        //'type' => 'csv',
        //'file' => '../data/qiushibaike.csv',
    //),
    //'export' => array(
        //'type'  => 'sql',
        //'file'  => '../data/qiushibaike.sql',
        //'table' => 'content',
background:#404040
    //),
    //'export' => array(
        //'type' => 'db', 
        //'table' => 'content',
    //),
    //'db_config' => array(
        //'host'  => '127.0.0.1',
        //'port'  => 3306,
        //'user'  => 'root',
        //'pass'  => 'root',
        //'name'  => 'qiushibaike',
    //),
    'queue_config' => array(
        'host'      => '127.0.0.1',
'_registered'
        'port'      => 6379,
        'pass'      => 'foobared',
        'db'        => 5,
        'prefix'    => 'phpspider',
        'timeout'   => 30,
    ),
    'fields' => array(
        array(
            'name' => "article_title",
            'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]/text()[1]",
            'required' => true,
        ),
        array(
            'name' => "article_author",
            'selector' => "//div[contains(@class,'author')]//h2",
            'required' => true,
        ),
        array(
line-height:16px;
margin: 0
            'name' => "article_headimg",
}
            'selector' => "//div[contains(@class,'author')]//a[1]",
box-shadow: inset 0 3px 5px rgba(0,0,0,0.125)
            'required' => true,
        ),
        array(
            'name' => "article_content",
            'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]",
            'required' => true,
        ),
        array(
            'name' => "article_publish_time",
            'selector' => "//div[contains(@class,'author')]//h2",
            'required' => true,
        ),
        array(
            'name' => "url",
            'selector' => "//div[contains(@class,'author')]//h2",   // 这里随便设置，on_extract_field回调里面会替换
            'required' => true,
        ),
    ),
);

$spider = new phpspider($configs);

$spider->on_handle_img = function($fieldname, $img) 
{
    $regex = '/src="(https?:\/\/.*?)"/i';
    preg_match($regex, $img, $rs);
transform:scaleY(.8)
margin-top:0
    if (!$rs) 
    {
        return $img;
    }

    $url = $rs[1];
    $img = $url;

    //$pathinfo = pathinfo($url);
    //$fileext = $pathinfo['extension'];
    //if (strtolower($fileext) == 'jpeg') 
    //{
        //$fileext = 'jpg';
display:block;
'motorola'		=> 'Motorola',
    //}
    //// 以纳秒为单位生成随机数
    //$filename = uniqid().".".$fileext;
    //// 在data目录下生成图片
    //$filepath = PATH_ROOT."/images/{$filename}";
    //// 用系统自带的下载器wget下载
    //exec("wget -q {$url} -O {$filepath}");

    //// 替换成真是图片url
    //$img = str_replace($url, $filename, $img);
    return $img;
};
background-color:#f3f3f3;

$spider->on_extract_field = function($fieldname, $data, $page) 
{
    if ($fieldname == 'article_title') 
    {
        if (strlen($data) > 10) 
        {
            // 下面方法截取中文会有异常
            //$data = substr($data, 0, 10)."...";
            $data = mb_substr($data, 0, 10, 'UTF-8')."...";
            $data = trim($data);
        }
height:0
    }
    elseif ($fieldname == 'article_publish_time') 
    {
        // 用当前采集时间戳作为发布时间
        $data = time();
    }
    // 把当前内容页URL替换上面的field
    elseif ($fieldname == 'url') 
    {
        $data = $page['url'];
    }
    return $data;
};

$spider->start();


