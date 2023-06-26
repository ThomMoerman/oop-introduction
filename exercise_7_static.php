<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/


class Beverage
{
    protected string $color;
    private float $price;
    private string $temperature;
    private static string $address = "Melkmarkt 9, 2000 Antwerpen";

    const BAR_NAME = 'Het Vervolg';

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

    public function getBarName(): string
    {
        return self::BAR_NAME;
    }

    public static function getAddress(): string
    {
        return self::$address;
    }

    public static function printAddress(): void
    {
        echo self::$address . "\n";
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

    public function getBarName(): string
    {
        return self::BAR_NAME;
    }

    public function getBeerInfo(): string
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
    }
}

echo Beverage::getAddress() . "\n";
echo '<br>';
Beverage::printAddress();

?>