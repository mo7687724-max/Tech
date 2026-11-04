<?php

class Animal{
    public function makeSound(){
        echo "Animal Make Sound";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "Dog Make Sound";
    }
}

class Cat extends Animal{
    public function makeSound(){
        echo "Cat Make Sound";
    }
}

$animal = new Animal();
$animal->makeSound();

echo "<hr>";

$dog = new Dog();
$dog->makeSound();

echo "<hr>";

$cat = new Cat();
$cat->makeSound();