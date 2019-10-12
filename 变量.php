<?php 
$x=5; // 全局变量 定义变量时不需要设定类型，在赋初值时系统自动分配空间

function myTest1() //函数的定义，若要传递参数，直接在括号里增加形参名即可，若有返回值，直接return
{ 
    global $x;  //全局变量不可以在函数中使用，除非在函数中进行此声明
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  
myTest1(); 
echo "<p>测试函数外变量:<p>";  //<p>:在换行的基础上再空一行
echo "变量 x 为: $x"; 
echo "<br>";   //<br>:换行
//echo "变量 y 为: $y";  局部变量无法在函数外使用



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

?>