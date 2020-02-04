<?php

class Pokemon {
    public $name;
    public $type;
    public $initialHealth;
    public $currentHealth;
    public $attacks;

    function __construct ( $name, $type, $initialHealth, $currentHealth, $attacks )
    {
        $this->name = $name;
        $this->type = $type;
        $this->initialHealth = $initialHealth;
        $this->currentHealth = $currentHealth;
        $this->attacks = $attacks;
    }

    public function attack() 
    {
        
    }

    public function set_name($n) {
        $this->name = $n;
    }

    public function set_type($n) {
        $this->type = $n;
    }

    public function set_initialHealth($n) {
        $this->initialHealth = $n;
    }

    public function set_currentHealth($n) {
        $this->currentHealth = $n;
    }

    public function set_attacks($n) {
        $this->name = $n;
    }

}

    
$bulbasaur = new Pokemon('name','type','initialHealth','currentHealth','attacks');
$bulbasaur->set_name('Bulbasaur');
$bulbasaur->set_type('Grass');
$bulbasaur->set_initialHealth('12');
$bulbasaur->set_currentHealth('12');
$bulbasaur->set_attacks('Scratch');

$charmander = new Pokemon('name','type','initialHealth','currentHealth','attacks');
$charmander->set_name('Charmander');
$charmander->set_type('Fire');
$charmander->set_initialHealth('12');
$charmander->set_currentHealth('12');
$charmander->set_attacks('Scratch');

$squirtle = new Pokemon('name','type','initialHealth','currentHealth','attacks');
$squirtle->set_name('Squirtle');
$squirtle->set_type('Water');
$squirtle->set_initialHealth('12');
$squirtle->set_currentHealth('12');
$squirtle->set_attacks('Scratch');