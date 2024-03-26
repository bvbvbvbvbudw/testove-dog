<?php

require_once 'Dog.php';
require_once 'breeds/ShibaInu.php';
require_once 'breeds/Pug.php';
require_once 'breeds/Dachshund.php';
require_once 'breeds/PlushLabrador.php';
require_once 'breeds/RubberDachshund.php';

$dogs = [
    new ShibaInu('Shiba Inu'),
    new Pug("Pug"),
    new Dachshund('Dachshund'),
    new PlushLabrador('Plush labrador'),
    new RubberDachshund("Rubber Dachshund with Squeaker"),
];

foreach ($dogs as $dog){
    echo $dog->sound() . '\n';
    echo $dog->hunt() . '\n';
}