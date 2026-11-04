<!-- 


class Student{

    // data member
    private int $id;
    private string $name;
    private string $email;
    private string $password;

    // contructor
    public function __construct(int $id, string $name, string $email, string $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function __destruct(){
        echo "Id : $this->id <br>";
        echo "Name : $this->name <br>";
        echo "Email : $this->email <br>";
        echo "Password : $this->password";
    }
    // public function studentInfo(){
    //     echo "Id : $this->id <br>";
    //     echo "Name : $this->name <br>";
    //     echo "Email : $this->email <br>";
    //     echo "Password : $this->password";
    // }
}

$stu = new Student(101, "Abir", "abir@gmail.com", "123456");
// $stu->studentInfo();



?> -->