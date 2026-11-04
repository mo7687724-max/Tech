<!-- 

class Person
{
    // data member
    public int $id;
    public string $name;
    public string $email;
    public string $password;

    public function personInfo()
    {
        echo $this->id . "<br>";
        echo $this->name . "<br>";
        echo $this->email . "<br>";
        echo $this->password . "<br>";
    }
}


$person = new Person();
$person->id = 101;
$person->name = "Mohit";
$person->email = "mohit@email.com";
$person->password = "123456";
$person->personInfo(); -->
