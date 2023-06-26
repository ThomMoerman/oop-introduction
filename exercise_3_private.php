<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

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

    private function beerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
    }

    public function getBeerInfo(): string
    {
        return $this->beerInfo();
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