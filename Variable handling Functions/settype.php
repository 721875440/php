<?
$foo = "5bar";//定义一个字符串变量
$bar = true;//定义一个逻辑变量

settype($foo,"integer");//字符串转换整数型
echo $foo+5 ."<br>";

settype($bar,"string");//逻辑型转换成字符串

echo $bar."Hello";


