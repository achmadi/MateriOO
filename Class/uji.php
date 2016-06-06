<?php

require 'manusia.php';

$surya = new Belajar\OOP\Manusia();
$surya->pegang('Mouse');

var_dump($surya);

use Belajar\OOP\Manusia;

$rizki = new Manusia();
$rizki->pegang('Gitar');

var_dump($rizki);