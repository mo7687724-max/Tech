<?php

class Person{
    protected string $name;
    protected string $gender;

    public function __construct(string $name, string $gender){
        $this->name = $name;
        $this->gender = $gender;
    }
    
    public function personInfo(){
        echo "Name : $this->name <br>";
        echo "Gender : $this->gender <br>";
    }
}

class Employee extends Person{
    protected float $salary;
    protected string $position;

    public function __construct(string $name, string $gender, float $salary, string $position){
        parent::__construct($name, $gender);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function employeeInfo(){
        $this->personInfo();
        echo "Salary : $this->salary <br>";
        echo "Position : $this->position <br>";
    }
}

class Manager extends Employee{
    private string $department;
    private int $experience;

    public function __construct(string $name, string $gender, float $salary, string $position, string $department, int $experience){
        parent::__construct($name, $gender, $salary, $position);
        $this->department = $department;
        $this->experience = $experience;
    }

    public function managerInfo(){
        $this->employeeInfo();
        echo "Department : $this->department . <br>";
        echo "Experience : $this->experience . <hr>";
    }
}


$emp = new Employee("John", "Male", 5000, "WEB DEVELOPER");
echo "============= EMPLOYEE INFORMATION =============<hr>";
$emp->employeeInfo();
echo "<hr>";
$manager = new Manager("Raju", "Male", 5000, "Manager", "IT", 5);
echo "============= MANAGER INFORMATION =============<hr>";
$manager->managerInfo();
