<?php
class A{
    public function hello(){
        return "hi,I'm parentof my child";

    }
}
class child1 extends A{
    public  function  hello(){
        return "hello,i'm child";
    }
}
class child2 extends A{

    public function hello(){

        return "hello,I'm 2nd child";
    }


}
$oOfchild1=new child1();
echo $oOfchild1->hello();
echo "<br>";
$oOfchild2= new child2();
echo $oOfchild2->hello();