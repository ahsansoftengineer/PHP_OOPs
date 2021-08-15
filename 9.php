<h1> Namespace PHP </h1>
<?php
  include '9.1.php';
  include '9.2.php';
  require '9.3.php';
  $emp1 = new first\Employee();
  $emp2 = new second\Employee();
  $emp3 = new \gamearena\v1\category\Employee();
  // Shorten the namespace by using use Statement
  use \gamearena\v1\category\Employee as Employee4;
  $emp4 = new Employee4();
  function func(){
    echo "local func Called <br>";
  }
  func();
  first\func();
