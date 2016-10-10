<?
class demo{
    public function __destruct(){
        echo "我结束了";
    }//end function
    
    public function test(){
        echo "测试效果<br>";
    }//end function        
}//end demo


$test = new demo();
$test->test();
/*
函数执行完毕后，会默认执行__destruct 析构函数


结果：

输出测试效果
我结束了
*/

































































