<?php

use App\User;
use Database\Models\ProductModel;

require __DIR__ . "/vendor/autoload.php";

$user = new User();
echo $user->getName();
echo "\n";

$product = new ProductModel();
echo $product->getId();