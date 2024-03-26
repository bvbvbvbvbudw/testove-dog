<?php

class RubberDachshund extends Dog
{
    public function sound()
    {
        return 'squeak!';
    }
    public function hunt()
    {
        return 'this toy cannot hunt';
    }
}