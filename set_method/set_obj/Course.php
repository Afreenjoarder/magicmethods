<?php
class Course{

function  __set($propertyName,$propertyValue){
  echo "Hii,i'm set";
    var_dump($propertyName);
    var_dump($propertyValue);
}
    function  __get($value){
        echo "Hi,Reading this article";

    }
}