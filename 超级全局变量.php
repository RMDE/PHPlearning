<?php
// $GLOBALS
// 包含了全部全局变量的全局组合数组，变量名为键，变量值为值
// 作用域为所有域
$x=10;
$y=20;
$GLOBALS['ans']=$GLOBALS['x']+$GLOBALS['y']; //若未定义该全局变量，则自动定义，且也为全局变量
echo $ans."<br>";


// $_SERVER
// 包含了诸如头信息(header)、路径(path)以及脚本位置(script locations)等信息的数组
/*$_SERVER['PHP_SELF']            当前执行脚本的文件名，与 document root 有关。
  $_SERVER['GATEWAY_INTERFACE']   服务器使用的 CGI 规范的版本；
  $_SERVER['SERVER_ADDR']         当前运行脚本所在的服务器的 IP 地址。
  $_SERVER['SERVER_NAME']         当前运行脚本所在的服务器的主机名。
                                  如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。
  $_SERVER['SERVER_SOFTWARE']     服务器标识字符串，在响应请求时的头信息中给出。
  $_SERVER['SERVER_PROTOCOL']     请求页面时通信协议的名称和版本。
  $_SERVER['REQUEST_METHOD']      访问页面使用的请求方法；例如，"GET", "HEAD"，"POST"，"PUT"。
  $_SERVER['REQUEST_TIME']        请求开始时的时间戳。
  $_SERVER['QUERY_STRING']        查询字符串，通过它进行页面访问。
  $_SERVER['HTTP_ACCEPT']         当前请求头中 Accept: 项的内容
  $_SERVER['HTTP_ACCEPT_CHARSET'] 当前请求头中 Accept-Charset: 项的内容
  $_SERVER['HTTP_HOST']           当前请求头中 Host: 项的内容 
  $_SERVER['HTTP_REFERER']        引导用户代理到当前页的前一页的地址,由 user agent 设置决定。
  $_SERVER['HTTPS']               如果脚本是通过 HTTPS 协议被访问，则被设为一个非空的值。
  $_SERVER['REMOTE_ADDR']         浏览当前页面的用户的 IP 地址。
  $_SERVER['REMOTE_HOST']         浏览当前页面的用户的主机名。DNS 反向解析不依赖于用户的 REMOTE_ADDR。
  $_SERVER['REMOTE_PORT']         用户机器上连接到 Web 服务器所使用的端口号。
  $_SERVER['SCRIPT_FILENAME']     当前执行脚本的绝对路径。
  $_SERVER['SERVER_ADMIN']        指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。
                                  如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。(如：someone@runoob.com)
  $_SERVER['SERVER_PORT']Web      服务器使用的端口。默认值为 "80"。
                                  如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。
  $_SERVER['SERVER_SIGNATURE']    包含了服务器版本和虚拟主机名的字符串。
  $_SERVER['PATH_TRANSLATED']     当前脚本所在文件系统（非文档根目录）的基本路径。
                                  这是在服务器进行虚拟到真实路径的映像后的结果。
  $_SERVER['SCRIPT_NAME']         包含当前脚本的路径。
  $_SERVER['SCRIPT_URI']           URI 用来指定要访问的页面。
*/
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<?php
// $_REQUEST
// 用于收集HTML表单提交

/*以下实例显示了一个输入字段（input）及提交按钮(submit)的表单(form)。 
当用户通过点击 "Submit" 按钮提交表单数据时, 表单数据将发送至form标签中 action 属性中指定的脚本文件。 
在这个实例中，我们指定文件来处理表单数据。如果你希望其他的PHP文件来处理该数据，你可以修改该指定的脚本文件名。 
然后，我们可以使用超级全局变量 $_REQUEST 来收集表单中的 input 字段数据:*/
echo "<p><p><p>---------------------<br>";
?>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
<?php
$name = $_REQUEST['fname']; 
echo $name; 
?>
</body>
</html>


// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

?>