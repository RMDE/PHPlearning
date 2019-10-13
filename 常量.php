<?php
/*常量定义 -- define()
**bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
**name：必选参数，常量名称，即标志符。
**value：必选参数，常量的值。
**case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
*/
echo "常量测试<br>";
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
//echo greeting;   // 报错
// 不区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com", true);
echo greeting;  // 输出 "欢迎访问 Runoob.com"
echo "<br>";
//函数内也可使用
function myTest() {
    echo GREETING;
}
myTest();    // 输出 "欢迎访问 Runoob.com"
?>