<?php
    class Test{
      private string $privateProperty = "Private Property";
      private $data = ["name"=>"Yahoo Baba", "Course"=>"PHP", "Fee"=>25000];
      function __construct()
      {
        echo "namespace = GET class = Test Constructor Called <br>";
      }
      // Error Report Private Function
      private function privateFunc()
      {
        echo "namespace = GET class = Test privateFunc Called <br>";
      }
      // Works Only for Private Properties for Getting Pupose
      public function __get($name)
      {
        echo "You r trying to access Non Existing or Private Property($name) <br>";
      }
      // public function __set($name, $value)
      // {
      //   echo "This is Non Exsisting or private property : $name <br>";
      //   echo "Cannot Set $name to $value <br>";
      // }
      // Here we are modifiying the __get method to return value by key in $data Array
      // public function __get($key)
      // {
      //   if (array_key_exists($key, $this->data)) {
      //     return $this->data[$key];
      //   } else {
      //     return "This Key ($key) is not defined.";
      //   }
      // }
      public function __set($name, $value)
      {
        if(property_exists($this, $name)){
          $this->$name = $value;
          echo "'$name' set to '$value' successfully<br>";
        }else {
          echo "Non Exsisting property : $name <br>";
        }
      }

    }
    $test = new Test();
    // echo $test->privateProperty; // Example for __get private property
    // echo $test->Fee; // Example for __get value from Array
    echo $test->privateProperty = "New Value"; // Example of __set private property
