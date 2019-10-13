<?php
echo "---------全局/局部变量比较----------<br>" ;
$x=5; // 全局变量 定义变量时不需要设定类型，在赋初值时系统自动分配空间
      // 整型变量可用三种格式表示：十进制、十六进制（0x前缀）、八进制（0前缀)

function myTest1() //函数的定义，若要传递参数，直接在括号里增加形参名即可，若有返回值，直接return
{ 
    global $x;  //全局变量不可以在函数中使用，除非在函数中进行此声明
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  
myTest1(); 
echo "<p>测试函数外变量:";  //<p>:在换行的基础上再空一行
echo "变量 x 为: $x"; 
echo "<br>";   //<br>:换行
echo "变量x的类型为：";
echo gettype($x)."<br>"; //获取变量的类型

//echo "变量 y 为: $y";  局部变量无法在函数外使用


echo "<p>------------静态局部变量-------------<br>";
function myTest2()
{
    static $x=0; //静态局部变量，只会在第一次调用该函数时分配空间，
                 //并且一直存在，不会在函数调用结束后消失
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}
myTest2();
myTest2();
myTest2();

/*类型比较
松散比较：使用'=='，只比较值，不比较类型
严格比较：使用三个等号'==='比较，既比较值也比较类型
*/
echo "<p>----------类型比较----------<br>";
$p=5;
$q=5.0;
if($p===$q)
    echo "p is completely equal with q <br>";
else if($p==$q)
    echo "p is slightly equal with q <br>";
$r=5;
if($p===$r)
    echo "p is completely equal with r <br>";
else if($p==$r)
    echo "p is slightly equal with r <br>";


/*0,false,null,"","0"的比较
*/
echo "<p>0,false,null,\"\"的比较<br>";
if(0===false)
    echo "0 === flase<br>";
else if(0==false)
    echo "0 == flase<br>";
else
    echo "0 != false<br>";
if(0===null)
    echo "0 === null<br>";
else if(0==null)
    echo "0 == null<br>";
else
    echo "0 != null<br>";
if(0==="")
    echo "0 === \"\"<br>";
else if(0=="")
    echo "0 == \"\"<br>";
    else
    echo "0 != \"\"<br>";
if(false===null)
    echo "false === null<br>";
else if(false==null)
    echo "false == null<br>";
else
    echo "false != null<br>";
if(false==="")
    echo "false === \"\"<br>";
else if(false=="")
    echo "false == \"\"<br>";
    else
    echo "fasle != \"\"<br>";
if(null==="")
    echo "null === \"\"<br>";
else if(null=="")
    echo "null == \"\"<br>";
    else
    echo "null != \"\"<br>";
if("0"===null)
    echo "\"0\" === null<br>";
else if("0"==null)
    echo "\"0\" == null<br>";
else
    echo "\"0\" != null<br>";
?>