<?

class demo {//创建一类
    var $a;//创建一个变量
    function call(){//创建一个函数，默认是public公开的
        echo "我是一个demo";
    }//end function
    
    function __construct($a,$b){//创建一个结构
        echo $a + $b;
    }
    
    
    
    function __destruct(){//析构方法
        echo "结束了";
    }    
    
    
    
    
    
    
    
    
}
$ss = new demo(10,20);









