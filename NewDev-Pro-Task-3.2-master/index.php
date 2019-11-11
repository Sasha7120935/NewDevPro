<?php

require_once '.\vendor\autoload.php';

use scr\Antilopa;
use scr\Cat;
use scr\Cougar;
use scr\Dog;
use scr\Elephant;
use scr\Lion;
use scr\Wolf;
use scr\Shark;
use scr\Trout;
use scr\Essence;


ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);



$Essence = new Essence();
$Essence -> setName('Insect');
echo $Essence->EatGrass();
echo $Essence->crawl();
echo $Essence->Terrarium();

$Cat = new Cat();
$Cat->Cell();
echo $Cat->run();
echo $Cat->EatMeat();

$Dog = new Dog();
$Dog ->Cell();
echo $Dog ->run();
echo $Dog ->EatMeat();

$Cougar = new Cougar();
$Cougar->Cell();
echo $Cougar->run();
echo $Cougar->EatMeat();

$Wolf = new Wolf();
$Wolf->Cell();
echo $Wolf->run();
echo $Wolf->EatMeat();

$Lion = new Lion();
$Lion->Cell();
echo $Lion->run();
echo $Lion->EatMeat();

$Elephant = new Elephant();
$Elephant->Cell();
echo $Elephant->run();
echo $Elephant->EatFruit();

$Antilopa = new Antilopa();
$Antilopa->Cell();
echo $Antilopa->run();
echo $Antilopa->EatGrass();

$Shark = new Shark();
$Shark->Aquarium();
echo $Shark->swim();
echo $Shark->EatMeat();

$Trout = new Trout();
$Trout->Aquarium();
echo $Trout->swim();
echo $Trout->EatGrass();
