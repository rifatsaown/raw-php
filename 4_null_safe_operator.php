<?php

$user = null;

// Using nullsafe operator
$email = $user?->getEmail();
if ($email) {
    echo "User email: " . $email;
} else {
    echo "No user or email not available.";
}

echo "\n";

class Product
{
    public function __construct(
        public string $name,
        public ?float $price=null,
        public ?float $beforePrice=null,
        public ?float $afterPrice=null,
    ) {
    }
}

$product = new Product(
    name: "Sample Product",
    afterPrice: 80.0
);

var_dump($product);