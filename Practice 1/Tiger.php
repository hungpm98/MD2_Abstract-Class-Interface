<?php
include_once "Animal.php";
include_once "Edible.php";
class Tiger extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "Tiger: roarrrrr!";
    }

    public function howtoEat(): string
    {
        return "Tiger eat us";
    }
}