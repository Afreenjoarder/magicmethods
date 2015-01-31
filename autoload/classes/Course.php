<?php
class Course{


    function __call($functionName,$arguments){
        echo "hello";

        var_dump($functionName);
        var_dump($arguments);
    }


}
