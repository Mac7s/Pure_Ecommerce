<?php
use Winter\SourceEcommerce\database\DBController;

//require product class
require_once "./src/database/Product.php";
require_once "./src/database/Blog.php";
//dbController object
$db = new DBController();
//product object

$product = new Product($db);
$blog = new Blog($db);