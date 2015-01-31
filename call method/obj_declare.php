<?php
function __autoload($class_name){
    include_once 'call_obj/'.$class_name.'.php';


}
$course=new Course();
echo"<br>";
$course->getCredits("CSE","5");
echo "<br>";