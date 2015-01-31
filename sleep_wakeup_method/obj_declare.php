<?php
function __autoload($class_name){
    include_once 'sleep_wakeup_obj/'.$class_name.'.php';

}
$course=new Course();
//echo $course->title;
echo "<br>";

$srlMyarray=serialize($course);
echo "<br>";
echo $srlMyarray;
echo "<br>";
var_dump(unserialize($srlMyarray));
echo "<br>";