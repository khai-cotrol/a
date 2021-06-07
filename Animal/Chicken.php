<?php
include_once(dirname(__FILE__) . '/../animal.php');
include_once(dirname(__FILE__) . '/../interfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "Chicken: cluck- cluck1";
    }
    public function howToEat():string
    {
        return "could be fried";
    }
}