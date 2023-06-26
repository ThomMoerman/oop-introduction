<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class Beverage
{
    protected string $color;
    private float $price;
    private string $temperature;

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

echo Beverage::BAR_NAME . "\n"; 
echo " || One way to print it (watch codeline)";
echo '<br>';

$cola = new Beverage("black", 2);
echo $cola->getBarName() . "\n";
echo "|| Other way to print it (watch codeline)";
echo '<br>';


$duvel = new Beer("Duvel", 8.5);
echo "New beverage : Beer";
echo '<br>';
echo "Beer bar : ";
echo $duvel->getBarName() . "\n";
echo "One way to print it";
echo '<br>';
echo "Beer infos : ";
echo $duvel->getBeerInfo() . "\n";

?>