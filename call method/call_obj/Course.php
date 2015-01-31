<?php
class Course
{

    function __call($functionName, $arguments)
    {
        echo "hello";
        echo "<br>";

        var_dump($functionName);
        var_dump($arguments);
    }


}
