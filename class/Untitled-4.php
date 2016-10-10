<?

class a{
    static protected $test = "class a";
    public function static_test(){
        echo static::$test;//输出class b
        echo self::$test;//输出class a
    }
    

}//end class a


class b extends a{
    static protected $test = "class b";
}


$obj = new b();
$obj->static_test();










