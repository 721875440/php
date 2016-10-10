<?





class demo {//创建一类
   public static function call(){//静态函数属性
        echo "demo String";
    }//end function 
    
}//end class


demo::call();//使用::直接调用

/*class demo {//创建一类
   public function call(){//非静态函数属性
        echo "demo String";
    }//end function 
    
}//end class

$test =  new demo();//非静态需要new 实例化
$test->call(); //使用->调用函数
*/
