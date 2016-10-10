<?
class employee{
    protected $sal = 3000;
    public function getSal(){
        $this->sal = $this->sal + 1200;
        return $this->sal;
    }
}


class Manager extends employee{
    public function getSal(){
        parent::getSal();//调用父类的函数成员
        $this->sal = $this->sal + 50;
        return $this->sal;
    }      
}

$emp = new employee();
echo "普通员工的工资是".$emp->getSal()."<br>";

$nemp = new Manager();
echo "高级员工的工资是".$nemp->getSal()."<br>";

































































