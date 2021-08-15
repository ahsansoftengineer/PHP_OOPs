<h1>Destructor</h1>
<?php
  class Des{
    public function __construct(){
      echo "Constructor Function Called<br>";
    }
    public function myFunction(){
      echo "My Function Called<br>";
    }
    public function __destruct(){
      echo "Destructor Function Called<br>";
    }
  }
  $des = new Des();
  $des->myFunction();
?>