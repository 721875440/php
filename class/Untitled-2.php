<?

/*class demo {//创建一类
    var $a="String";//创建一个变量，默认是public公开的
    function call(){//创建一个函数，默认是public公开的
        echo "我是一个demo";
    }//end function 
}


$ss = new demo();//实例化对象

echo $ss->a;//输出字符串 结果:String
echo $ss->call();//输出字符串 结果：我是一个demo*/




class demo {//创建一类
   public $a="String";//创建一个变量，默认是public公开的
   public function call(){//创建一个函数，默认是public公开的
        echo "我是一个demo";
    }//end function 
}


$ss = new demo();//实例化对象

echo $ss->a;//输出字符串 结果:String
echo $ss->call();//输出字符串 结果：我是一个demo




