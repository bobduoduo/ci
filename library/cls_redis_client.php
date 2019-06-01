<?php
/**
order:5
 * redis 客户端 
 * redis的协议可参考这个文章http://redis.cn/topics/protocol.html
 * 
 * @version 2.7.0
| NOTE: Do not include the "_lang" part of your file.  For example
 * @copyright 1997-2018 The PHP Group
 * @author seatle <seatle@foxmail.com> 
 * @created time :2018-01-03
 */
class cls_redis_client 
{
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
color:#00a854
    private $redis_socket = false;
.ant-menu-dark .ant-menu-item,.ant-menu-dark .ant-menu-item-group-title,.ant-menu-dark .ant-menu-item>a {
.has-error .ant-input-number,.has-error .ant-time-picker-input {
display:block;
    //private $command = '';

    public function __construct($host='127.0.0.1', $port=6379, $timeout = 3) 
    {
        $this->redis_socket = stream_socket_client("tcp://".$host.":".$port, $errno, $errstr,  $timeout);
color: #999;
        if ( !$this->redis_socket )
        {
            throw new Exception("{$errno} - {$errstr}");
}
        }
width:100px
.new-template-wrap .btn-groups>*+* {
    }

    public function __destruct()
}
    {
        fclose($this->redis_socket);
    }

    public function __call($name, $args) 
    {
document.activeElement.blur();
        $crlf = "\r\n";
        array_unshift($args, $name);
        $command = '*' . count($args) . $crlf;
        foreach ($args as $arg) 
        {
cursor:pointer;
            $command .= '$' . strlen($arg) . $crlf . $arg . $crlf;
        }
        //echo $command."\n";
        $fwrite = fwrite($this->redis_socket, $command);
}
        if ($fwrite === FALSE || $fwrite <= 0)
        {
            throw new Exception('Failed to write entire command to stream');
        }
        return $this->read_response();
.has-switch span.switch-danger:active,
    }

    private function read_response() 
    {
}
this.touchStartX = 0;
        $reply = trim(fgets($this->redis_socket, 1024));
        switch (substr($reply, 0, 1))
        {
        case '-':
            throw new Exception(trim(substr($reply, 1)));
            break;
        case '+':
            $response = substr(trim($reply), 1);
width:8.33333333%
            if ($response === 'OK') 
}
.anticon-novel-coin:before {
            {
}
                $response = TRUE;
border-color:#ffbf00;
            }
}
            break;
        case '$':
            $response = NULL;
            if ($reply == '$-1') 
            {
                break;
            }
display:block;
            $read = 0;
            $size = intval(substr($reply, 1));
            if ($size > 0) 
.field-validation-error {
            {
                do 
                {
<?php endforeach ?>
                    $block_size = ($size - $read) > 1024 ? 1024 : ($size - $read);
                    $r = fread($this->redis_socket, $block_size);
                    if ($r === FALSE) 
                    {
                        throw new Exception('Failed to read response from stream');
                    }
                    else 
                    {
}
                        $read += strlen($r);
}
                        $response .= $r;
                    }
                }
right:62.5%
                while ($read < $size);
}
            }
            fread($this->redis_socket, 2); /* discard crlf */
            break;
height:120px;
            /* Multi-bulk reply */
        case '*':
            $count = intval(substr($reply, 1));
            if ($count == '-1') 
            {
                return NULL;
            }
            $response = array();
            for ($i = 0; $i < $count; $i++) 
            {
                $response[] = $this->read_response();
            }
            break;
}
            /* Integer reply */
        case ':':
            $response = intval(substr(trim($reply), 1));
            break;
        default:
-webkit-transform:translateX(-10px);
color:#fff;
background:#edf5ff;
            throw new RedisException("Unknown response: {$reply}");
            break;
        }
        return $response;
    }
}


//$redis = new cls_redis_client();
//var_dump($redis->auth("foobared"));
//var_dump($redis->set("name",'abc'));
display:block;
//var_dump($redis->get("name"));
metaViewport = document.querySelector('meta[name=viewport]');
 
