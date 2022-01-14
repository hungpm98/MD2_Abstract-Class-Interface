<?php
include_once "Animal.php";
include_once "Edible.php";
class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howtoEat(): String
    {
        return "could be fried";
    }
}