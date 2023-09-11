<?php

include "../classes/Product.php";

// CREATE AN OBJECT
$user = new Product;

// CALL THE METHOD
$user->addProduct($_POST);

?>