<?php

class Person
{

    protected $id;
    protected $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getPeronInfo()
    {
        return "
                ID : {$this->id} <br>
                Name : {$this->name} <br>
        ";
    }
}

class Student extends Person
{
    private $m;
    private $p;
    private $c;
    private $total;
    private $avg;
    private $grade;

    public function __construct($id, $name, $m, $p, $c)
    {
        parent::__construct($id, $name);
        $this->m = $m;
        $this->p = $p;
        $this->c = $c;
    }
    public function calculate()
    {
        $this->total = $this->m + $this->p + $this->c;
        $this->avg = $this->total / 3;

        if ($this->avg >= 90 && $this->avg <= 100) {
            $this->grade = "A";
        } elseif ($this->avg >= 80) {
            $this->grade = "B";
        } elseif ($this->avg >= 70) {
            $this->grade = "C";
        } elseif ($this->avg >= 60) {
            $this->grade = "D";
        } elseif ($this->avg >= 50) {
            $this->grade = "E";
        } elseif ($this->avg < 50) {
            $this->grade = "F";
        } else {
            $this->grade = "A+";
        }

        echo "============ LIST =========<br>";
        echo $this->getPeronInfo();
        echo "M : $this->m<br>";
        echo "P : $this->p<br>";
        echo "C : $this->c<br>";
        echo "Total : $this->total<br>";
        echo "Average : $this->avg<br>";
        echo "Grade : $this->grade<br>";
    }
}

class Teacher extends Person
{
    private $base_salary;
    private $total_salary;
    private $hours;
    private $rate;
    private $bonus;

    public function __construct($id, $name, $salary, $hours, $rate)
    {
        parent::__construct($id, $name);
        $this->base_salary = $salary;
        $this->hours = $hours;
        $this->rate = $rate;
    }

    public function calculate()
    {
        $this->bonus = $this->hours * $this->rate;
        $this->total_salary = $this->base_salary + $this->bonus;

        echo $this->getPeronInfo();
        echo "Base Salary : $this->base_salary<br>";
        echo "Hours : $this->hours<br>";
        echo "Rate : $this->rate<br>";
        echo "Bonus : $this->bonus<br>";
        echo "Total Salary : $this->total_salary<br>";
    }
}


$student = new Student("101", "John", 70, 90, 80);
$student->calculate();
echo "<hr>";

$teacher = new Teacher("101", "Thomas", 1200, 10, 20);
$teacher->calculate();
?>