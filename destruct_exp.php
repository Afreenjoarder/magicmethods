<?php
class User{

    public $name = null;
    public $fname=null;
    public $lname=null;
    function  __construct($fname,$lname){
        $this->fname=$fname;
        $this->lname=$lname;
    }

    function getFullname(){
        return $this->fname ." ".$this->lname;
    }

function __destruct(){
    echo "destroy it!!";
    echo "<br>";
}

}
$arif=new User("arif","hasan");
var_dump($arif);
//echo $arif->getFullname();