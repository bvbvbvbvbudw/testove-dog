<?php

abstract class Dog
{
    protected $breed;

    public function __construct($breed)
    {
        $this->breed = $breed;
    }
    abstract public function sound();
    abstract public function hunt();
}