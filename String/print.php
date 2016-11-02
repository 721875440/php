<?php

print("Hello World");//普通字符串输出打印

print "字\n符\n串";//转义字符打印


$demo = "demoString";

print ("$demo");//双引号打印变量：demoString

print ('$demo');//单号打印字符串：$demo

// 也可以使用数组
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // 结果：foo

?>