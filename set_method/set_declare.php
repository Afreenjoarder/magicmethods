<?php
function __autoload($class_name){

    include_once 'set_obj/'.$class_name.'.php';
}
$course =new Course();

echo "<br>";
$course->title="Course Title";

echo "<br>";
//var_dump($course);
