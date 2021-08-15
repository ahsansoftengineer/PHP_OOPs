<h1>__call __callStatic</h1>
<?php
  
  class student15{
    private $firstname;
    private $lastname;
    private static $gender = 'Male';
    private static $salary = 25000;
    private function setName($fname, $lname){
      $this->firstname = $fname;
      $this->lastname = $lname;
      echo $fname. ' '.$lname.'<br>';
    }
    // Static Methods Could only have Static Properties
    private static function getInfo(): string{
      return self::$gender. ' '.self::$salary.'<br>';
    }
    // Another Static Methods with Parameters
    private static function getParam($a, $b, $c){
      echo 'Static Method Called<br>';
      echo "$a $b $c <br>";
    }
    // Working only for functions to prevent from fatal Error
    // public function __call($method, $arguments)
    // {
    //   echo "This is private / non exsisting method : $method";
    // }
    // Call the private method if avilaible by using __call
    public function __call($method, $arguments)
    {
      if(method_exists($this, $method)){
        call_user_func_array([$this, $method], $arguments);
        echo "private method Called <br>";
      }else{
        echo "This is non exsisting method : $method <br>";
      }
    }
    // To Display Error for Non Exsisting and private Methods
    // public static function __callStatic($staticMethod, $arguments)
    // {
    //   echo "This is private / non exsisting static method : $staticMethod <br>";
    //   echo "<pre>";
    //   print_r($arguments);
    //   echo "</pre>";
    // }
    // To Execute private Method and Display Error for non exsisting static Method
    public static function __callStatic($staticMethod, $arguments)
    {
      if(method_exists(__CLASS__, $staticMethod)){
        call_user_func_array([__CLASS__, $staticMethod], $arguments);
      } else {
        echo "This is non exsisting static method : $staticMethod <br>";
      }
    }

  }
  $stud = new student15();
  $stud->setName("Ahsan", "King");
  // Static Methods Could be Called with Instance of an Object
  echo $stud::getInfo();
  // Static Method Could also be called without Instance of the Object
  echo $stud::getParam("Ahsan", "King","Khan");
?>