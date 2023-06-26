<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, string $color = "blond", float $price = 3.5, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getBeerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->getAlcoholPercentage()} and I have a {$this->getColor()} color.";
    }
}

$duvel = new Beer("Duvel", 8.5);
echo $duvel->getAlcoholPercentage() . "\n";
echo '<br>';
echo $duvel->getAlcoholPercentage() . "\n";
echo '<br>';
echo $duvel->getColor() . "\n";
echo '<br>';
echo $duvel->getInfo() . "\n";
echo '<br>';

$duvel->setColor("light");
echo $duvel->getColor() . "\n";
echo '<br>';
echo $duvel->getBeerInfo() . "\n";
?>