<?

class a{
    public $num = 10;
    public function demo(){
        echo $this->num;  //使用$this 调用自身的属性   
    }
}//end class a


$test = new a();
$test->demo();






