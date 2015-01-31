<?php
class p{

   public function hello(){
       return "Hello,I'm parent!r u my, child?";
   }

}
class child extends p{

    public function greetings(){
        echo $this->hello();
    }


}
$obj =new child();
echo $obj->greetings();