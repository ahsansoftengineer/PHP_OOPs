<h1>Interfaces</h1>
<p>PHP - What are Interfaces? Interfaces allow you to specify what methods a class should implement. Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".</p>
<?php
  interface IEmployee{

  }
  interface crud{
    function get($id);
    function gets();
    function add($obj);
    function update($obj);
    function delete($id);
    function print();
  }
  class Qualification implements crud{
    public int $id;
    public string $name;
    public string $grade;
    public string $gpa_percentage;
    public int $passingYear;

    function get($id){
      $this->id = 105;
      $this->id = '105';
      $this->id = 105.55;
    }
    function gets(){

    }
    function add($obj){

    }
    function update($obj){

    }
    function delete($id){

    }
    function print(){

    }
  }
  class Teacher implements crud{
    public int $id;
    public string $name;
    public Qualification $qualification;
    public string $dob;
    public string $fathername;
    public string $cnic;
    public static int $totalTeacher;

    function get($id){

    }
    function gets(): Teacher{
      return new Teacher();
    }
    function add($obj): bool{
      return true;
    }
    function update($obj): bool{
      return false;
    }
    function delete($id): bool{
      return true;
    }
    function print(): string{
      return "Here is my text to print";
    }
  }
?>
