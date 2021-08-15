<h1> PHP Constructors / Inheritence</h1>
<?php
  class Employee{
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

  }
  class FullTimeEmployee extends Employee{
    public int $annualSalary;
    public int $bonus;
    function __construct($id, $name, $gender, $annualSalary){

      parent::__construct($id, $name, $gender);
      $this->annualSalary = $annualSalary;
      $this->bonus = $annualSalary / 12;
    }
    function __toString()
    {
      return "Full Time ".parent::__toString().
      ", Annual Salary: ".$this->annualSalary.", Bonus: ".$this->bonus." }";
    }
  }
  class PartTimeEmployee extends Employee{
    public int $hourlyPay;
    public int $hoursWorked;
    function __construct($id, $name, $gender, $hourlyPay, $hoursWorkded){

      parent::__construct($id, $name, $gender);
      $this->hourlyPay = $hourlyPay;
      $this->hoursWorked = $hoursWorkded;
    }
    function __toString()
    {
      return "Part Time ". parent::__toString().
      ", Hourly Pay : ".$this->hourlyPay.", Hours Worked : ".$this->hoursWorked." }";
    }
  }



  $emp1 = new employee(101, "Ahsan", "Male");
  $empPart = new PartTimeEmployee(102, "Furqan", "Male", 180, 250);
  $empFull = new FullTimeEmployee(103, "Rafiqan", "Female", 140000);
  echo $emp1->__toString();
  echo" }<br>";
  echo $empPart->__toString();
  echo"<br>";
  echo $empFull->__toString();


?>