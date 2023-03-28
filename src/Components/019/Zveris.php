<?php

class Zveris extends Miskas{

    public $rusis, $spalva;
    
    public $vardas = 'Ieva';

    public function __construct(string $rusis, string $spalva) 
    {
        $this->rusis = $rusis;
        $this->spalva = $spalva;
    }

    public function say ()
    {
        $this->bu();
    }

    public function sayTevoBu()
    {
        parent::bu();
    }
}