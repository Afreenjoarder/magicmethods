<?php
class Human
{
    public $name = null;
    public $fname = null;
    public $lname = null;

    function __construct($fname, $lname)
    {

        $this->fname = $fname;
        $this->lname = $lname;
    }

    function getFullname(){

        return $this->fname." ".$this->lname;
    }


}
$shimu =new Human("Afreen","Joarder");
//echo $shimu->getFullname();
//var_dump($shimu);
echo $shimu->getFullname();
