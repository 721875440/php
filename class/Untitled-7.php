<?

class a{
    var $a = 10;//使用var  声明变量
    public $b = 20;//使用 public 声明变量
    
    public function demo(){
        echo $this->a;
        echo $this->b;
    }//end demo 
}//end class a

$test = new a();
$test->demo();






































































