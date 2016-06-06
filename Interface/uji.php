<?php

require 'senjata.php';
require 'tentara.php';

$pistol = new Pistol();
$senapanMesin = new SenapanMesin();
$pedangSamurai = new PedangSamurai();
$balokKayu = new BalokKayu();
$basoka = new Basoka();

$rambo = new Tentara();

$rambo->setSenjata($pistol);
$rambo->gunakanSenjata();

$rambo->setSenjata($senapanMesin);
$rambo->gunakanSenjata();

$rambo->setSenjata($pedangSamurai);
$rambo->gunakanSenjata();

$rambo->setSenjata($balokKayu);
$rambo->gunakanSenjata();

$rambo->setSenjata($basoka);
$rambo->gunakanSenjata();
