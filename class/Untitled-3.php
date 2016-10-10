<?





class demo {//创建一类
   private $a="String";//私有的属性变量，外部不可以访问
   private function call(){//私有的函数，外部不可以调用
        echo $this->a;
    }//end function 
    
    
   function open(){
      $this->call();
   }//end open
    
}//end class


$ss = new demo();//实例化对象

$ss->open();//输出 String 



