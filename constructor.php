<?php
class Human{
    function  __construct($name,$age,$gender)
    {
        echo $name;
        echo "<br>";
        echo $age;
        echo "<br>";

        echo $gender;
    }
}
$obj=new Human("asad","23","male");

