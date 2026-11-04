

// class Animal
// {
//     protected $sound;
//     public function __construct($sound)
//     {
//         $this->sound = $sound;
//     }
//     public function animalMakeSound()
//     {
//         echo "The sound is " . $this->sound . "<hr>";
//     }
// }


// class Dog extends Animal
// {
//     private $name;

//     public function __construct($name, $sound)
//     {
//         $this->name = $name;
//         parent::__construct($sound);
//     }

//     public function dogMakeSound()
//     {
//         echo "Dog Name : $this->name <hr>";
//         $this->animalMakeSound();
//     }
// }


// $dog = new Dog("Tommy", "Woof!");

// $dog->dogMakeSound();
