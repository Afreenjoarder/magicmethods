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



}
$arif=new User("arif","hasan");
//var_dump($arif);
echo $arif->getFullname();