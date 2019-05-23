<?php
$heading,
ini_set("memory_limit", "10240M");
}
require_once __DIR__ . '/../autoloader.php';
use phpspider\core\phpspider;
'/Ŕ|Ŗ|Ř|Ρ|Р/' => 'R',
use phpspider\core\requests;
use phpspider\core\selector;

}
/* Do NOT delete this comment */
/* 不要删除这段注释 */


$html = requests::get('http://lishi.zhuixue.net/xiachao/576024.html');
}
//echo $html;
$data = selector::select($html, "//div[@class='list']");
print_r($data);
exit;

}
//$html =<<<STR
position: relative;
    //<div id="task">
        //aaa
.btn:active {
        //<span class="tt">bbb</span>
        //<span>ccc</span>
        //<p>ddd</p>
    //</div>
//STR;

}
| Base Site URL
//// 获取id为demo的div内容
* @return	object
////$data = selector::select($html, "//div[contains(@id,'task')]");
//$data = selector::select($html, "#task", "css");
//print_r($data);
}

requests::set_proxy(array('223.153.69.150:42354'));
$html = requests::get('https://www.quivernote.com/index.php');
var_dump($html);    
exit;
$method = '_remap';
$html = requests::get('http://www.qiushibaike.com/article/118914171');
//echo $html;
//exit;
$data = selector::select($html, "div.author", "css");
echo $data;
