<?php
function __autoload($class_name){
    include_once 'classes/'.$class_name.'.php';


}
$obj= new Cse();
//echo $obj->fullMeaning;
echo "<br>";
$objE = new Ete();
//echo $objE->fullName;

$course =new Course;
//echo $course->title;
echo "<br>";
 //$course->title="Course Title";
//echo $course->title;
echo "<br>";
//var_dump($course);//overloading...
$course->getCredits("hello","hiii");
//$course->getLesson();

