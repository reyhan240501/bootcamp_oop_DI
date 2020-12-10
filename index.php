<?php

use App\Mitsubishi;
use App\Honda;

require "vendor/autoload.php";

/**
 * The result of the honda class
 * 
 * @return string.int
 */

$honda=new Honda();
$honda->fillup();

echo "<br/>";

/**
 * The result of the Mitsubishi class
 * 
 * @return string.int
 */

$car=new Mitsubishi();
$car->fillup();