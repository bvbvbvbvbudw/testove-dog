<?php

use PHPUnit\Framework\TestCase;

require_once 'Dog.php';
require_once 'breeds/ShibaInu.php';
require_once 'breeds/Pug.php';
require_once 'breeds/Dachshund.php';
require_once 'breeds/PlushLabrador.php';
require_once 'breeds/RubberDachshund.php';

class DogTest extends TestCase {
    public function testSound() {
        $shibaInu = new ShibaInu("Shiba Inu");
        $this->assertEquals("woof!", $shibaInu->sound());

        $pug = new Pug("Pug");
        $this->assertEquals("woof!", $pug->sound());

        $dachshund = new Dachshund("Dachshund");
        $this->assertEquals("woof!", $dachshund->sound());

        $plushLabrador = new PlushLabrador("Plush Labrador");
        $this->assertEquals("this toy does not make sounds", $plushLabrador->sound());

        $rubberDachshund = new RubberDachshund("Rubber Dachshund with Squeaker");
        $this->assertEquals("squeak!", $rubberDachshund->sound());
    }

    public function testHunt() {
        $shibaInu = new ShibaInu("Shiba Inu");
        $this->assertEquals("hunting!", $shibaInu->hunt());

        $pug = new Pug("Pug");
        $this->assertEquals("lazy", $pug->hunt());

        $dachshund = new Dachshund("Dachshund");
        $this->assertEquals("hunting!", $dachshund->hunt());

        $plushLabrador = new PlushLabrador("Plush Labrador");
        $this->assertEquals("this toy cannot hunt", $plushLabrador->hunt());

        $rubberDachshund = new RubberDachshund("Rubber Dachshund with Squeaker");
        $this->assertEquals("this toy cannot hunt", $rubberDachshund->hunt());
    }
}
