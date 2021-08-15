<h1>Type Hinting</h1>
<p>The Builtien Data Types availaible in Type Hinting are</p>
<p><i>These Data Types are Case Insensitive</i></p>
<ol>
  <li>Int</li>
  <li>Float</li>
  <li>String</li>
  <li>Bool</li>
  <li>Array</li>
  <li>Class / Interface Name</li>
  <li>Object</li>
</ol>
<?php
  echo "<h2>Type Hinting</h2>";
  function sum(int $a, Int $b, INT $c){
    echo $a + $b + $c;
  }
  sum(10, 50, 80);
  echo "<h2>Type Hinting Array</h2>";
  function printNames(array $fruits){
    echo '<ol>';
    foreach($fruits as $name){
      echo "<li>$name</li>";
    }
    echo '</ol>';
  }
  $phals = ['Apple', 'Banana', 'Grapes'];
  printNames($phals);
  echo "<h2>Type Hinting Classes</h2>";
  class E{
    public int $id;
    public string $name;
    public string $gender;
    function __construct(int $id, string $name, string $gender){
      $this->id = $id;
      $this->name = $name;
      $this->gender = $gender;
    }
    function __toString(): string
    {
      return "ID: $this->id Name: $this->name Gender: $this->gender";
    }
    function printArray(array $employees){
      foreach($employees as $employee){
        if($employee instanceof E){
          echo $employee->__toString();
        }else {
          echo "invalid DataType E";
        }
      }
    }
  }
  function printObject(E $employee){
    echo "ID: $employee->id Name: $employee->name Gender: $employee->gender";
  }
  $emp = new E(101, 'Ahsan', 'Male');
  printObject($emp);
  echo "<br>";
  echo $emp->__toString();

?>