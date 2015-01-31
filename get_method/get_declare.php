<?php
function __autoload($class_name){

    include_once 'get_obj/'.$class_name.'.php';
}
$course=new Course();
echo $course->title;
echo "<br>";