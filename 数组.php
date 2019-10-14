<?php 
//计算数组元素个数
$test=array("a","b","c");
echo "the number of elements in array ['a','b','c'] is ".count($test)."<p>";


//关联数组
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r($age);
echo "<p>";
//等价
/*$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43"; */
//遍历关联数组
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


//多维数组
$sites = array  //第一层数组
( 
    "name"=>array  //相当于原本的下标[0]变为了下标['name'],访问该子数组时可用sites['name']访问
    ( 
        "Green", 
        "Tom" 
    ), 
    "adress"=>array 
    ( 
        "NewYork", 
        "American" 
    ), 
    "job"=>array 
    ( 
        "programer", 
        "IT" 
    ) 
); 
print("<pre>"); // 格式化输出数组 
print_r($sites); 
print("</pre>"); 


//数组排序
/*数组排序函数：
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
*/
echo "<p>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
sort($age);echo "the result of sort:  ";print_r($age);echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
rsort($age);echo "the result of rsort:  ";print_r($age);echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);echo "the result of asort:  ";print_r($age);echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);echo "the result of ksort:  ";print_r($age);echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);echo "the result of arsort:  ";print_r($age);echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);echo "the result of krsort:  ";print_r($age);echo "<br>";
?>