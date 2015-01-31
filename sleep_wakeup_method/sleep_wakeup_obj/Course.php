<?php
class Course{

function  __sleep(){

    echo "I'm now sleeping...zzzzzz!";
    return array();
}
    function  __wakeup(){
        echo "hii,I'm now ready to work....";
    }
}