<?php
class Animal{
    public $name=null;
    public $fanimal=null;
    public $lanimal=null;

 function  __construct($fanimal,$lanimal){
     $this->fanimal=$fanimal;
     $this->lanimal=$lanimal;


 }

  function get2animal(){
      return $this->fanimal.",".$this->lanimal;

  }

function  __destruct(){
    echo "destroy animal!!!";
    echo "<br>";

}

}
$obj=new Animal("Tiger","Lion");
echo $obj->get2animal();
echo "<br>";