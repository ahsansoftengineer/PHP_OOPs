<h1> Abstract Class</h1>
<p>We use abstract classes when we want to commit the programmer (either oneself or someone else) to write a certain class method, but we are only sure about the name of the method, and not the details of how it should be written. To take an example, circles, rectangles, octagons, etc</p>
<h1>Access Modifiers</h1>
<p>public, protected, private { Only availaible for properties, functions } <br>
<i>Default is public access modifier</i> </p>
<?php
 
  abstract class Student{
    public int $id;
    public string $name;
    public string $gender;
    function __construct($id, $name, $gender)
    {
      $this->id = $id;
      $this->name = $name;
      $this->gender = $gender;
    }
    function __toString()
    {
      return "Employee : { id: ".$this->id.", name: ".$this->name.", gender: ".$this->gender;
    }
    // An Abstract Class must have atleast abstract Method.
    protected abstract function students();
  }
  class Kids extends Student{
    public function students(){
      return [
        new Kids(1, 'Ahsan', 'Male'),
        new Kids(2, 'Asim', 'Male'),
        new Kids(3, 'Furqan', 'Male'),
        new Kids(4, 'Khalida', 'Female')
      ];
    }
  }
  $kids = new Kids(5, "Habib", "Male");
  echo "<h2>For Each</h2>";
  foreach($kids->students() as $kid){
    echo $kid->__toString().'<br>';
  }
  echo "<h2>For Loop</h2>";
  for($i = 0; $i < count($kids->students()); $i++ ){
    echo $kids->students()[$i].'<br>';
  }
  $i = 0;
  echo "<h2>While</h2>";
  while($i < count($kids->students())){
    echo $kids->students()[$i].'<br>';
    $i++;
  }
  
?>