<?php

class Pokemon {
    public $name;
    public $type;
    public $initialHealth;
    public $currentHealth;
    public $attack1;
    public $attack2;
    public $attack3;

    function __construct ( $name, $type, $initialHealth, $currentHealth, $attack1, $attack2, $attack3 )
    {
        $this->name = $name;
        $this->type = $type;
        $this->initialHealth = $initialHealth;
        $this->currentHealth = $_SESSION['currentHealth'];
        $this->attack1 = $attack1;
        $this->attack2 = $attack2;
        $this->attack3 = $attack3;
    }

    public function attack() 
    {
        $damage = $_POST['attack1'];
        $player->attack1[[1]]['damage'];

        $damage = $_POST['attack2'];
        $player->attack2[[1]]['damage'];

        $damage = $_POST['attack3'];
        $player->attack3[[1]]['damage'];

        $attack1 = $_POST['attack1'];
            $_SESSION['currentHealth'] -= $bulbasaur->attack1[1]['damage'];

        $attack2 = $_POST['attack2'];
            $_SESSION['currentHealth'] -= $player->attack2[1]['damage'];

        $attack3 = $_POST['attack3'];
            $_SESSION['currentHealth'] -= $player->attack3[1]['damage'];

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

    public function set_attack1($n) {
        $this->attack1 = $n;
    }
    
    public function set_attack2($n) {
        $this->attack2 = $n;
    }

    public function set_attack3($n) {
        $this->attack3 = $n;
    }

}

    $scratch = [
       "attackname" => "scratch",
       "damage" => $_POST["2"],
       "type" => "normal"
    ];

    $vineWhip = [
        "attackname" => "Vine Whip",
        "damage" => "3",
        "type" => "grass"
     ];

     $tackle = [
        "attackname" => "Tackle",
        "damage" => "3",
        "type" => "normal"
     ];

     $ember = [
        "attackname" => "Ember",
        "damage" => "3",
        "type" => "fire"
     ];

     $bubble = [
        "attackname" => "Bubble",
        "damage" => "3",
        "type" => "water"
     ];
    
$bulbasaur = new Pokemon('name','type','initialHealth','currentHealth','attack1','attack2','attack3');
$bulbasaur->set_name('Bulbasaur');
$bulbasaur->set_type('Grass');
$bulbasaur->set_initialHealth('12');
$bulbasaur->set_currentHealth('12');
$bulbasaur->set_attack1('Scratch');
$bulbasaur->set_attack2('Vine Whip');
$bulbasaur->set_attack3('Tackle');


$charmander = new Pokemon('name','type','initialHealth','currentHealth','attack1','attack2','attack3');
$charmander->set_name('Charmander');
$charmander->set_type('Fire');
$charmander->set_initialHealth('12');
$charmander->set_currentHealth('12');
$charmander->set_attack1('Scratch');
$charmander->set_attack2('Ember');
$charmander->set_attack3('Tackle');

$squirtle = new Pokemon('name','type','initialHealth','currentHealth','attack1','attack2','attack3');
$squirtle->set_name('Squirtle');
$squirtle->set_type('Water');
$squirtle->set_initialHealth('12');
$squirtle->set_currentHealth('12');
$squirtle->set_attack1('Scratch');
$squirtle->set_attack2('Bubble');
$squirtle->set_attack3('Tackle');

/*  Warrens example

$char = new Pokemon(
    'charmander',
    'fire',
    10,
    $_SESSION['currentHealth'],
    [
        'tackle' => [
            'damage' => 3,
            'type' => 'fire'
        ],
        'ember' => [
            'damage' => 3,
            'type' => 'fire'
        ],
    ]
)