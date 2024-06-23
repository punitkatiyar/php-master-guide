<?php
interface A{
    public function test();
}

interface B{
    public function test1();
}
class master implements A, B{

    public function test(){
        return "Test Case One";
    }
    public function test1(){
        return "Test Case Two";
    }
}
$app=new master;
echo $app->test();
echo $app->test1();

?>
