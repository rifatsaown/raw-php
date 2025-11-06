<?php

class Product
{
    public string $name;
    public float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo()
    {
        return "Product: " . $this->name . ", Price: $" . $this->price;
    }
}


$product = new Product("Sample Product", 29.99);

var_dump($product);
var_dump($product->getInfo());


class Cars
{
    public function __construct(
        public string $name,
        public float $price
    ) {
    }
    public function getInfo()
    {
        return "Car: " . $this->name . ", Price: $" . $this->price;
    }

    public function isExpensive(): bool
    {
        return $this->price > 100;
    }
}

$car = new Cars("BMW", 102);

var_dump($car);
var_dump($car->getInfo());
var_dump($car->isExpensive());


class DigitalProduct extends Product
{
    public readonly float $fileSize; // in MB

    public function __construct(string $name, float $price, float $fileSize)
    {
        parent::__construct($name, $price);
        $this->fileSize = $fileSize;
    }
    public function getInfo()
    {
        return parent::getInfo() . ", File Size: " . $this->fileSize . "MB";
    }
}

$googlePlayGiftCard = new DigitalProduct("Google Play Gift Card", 50, 100);

var_dump($googlePlayGiftCard);
var_dump($googlePlayGiftCard->getInfo());
$googlePlayGiftCard->name = "Apple";
// $googlePlayGiftCard->fileSize = 150; // This will cause an error because fileSize is readonly

