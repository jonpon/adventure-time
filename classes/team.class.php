<?php

class Team extends Character {

  public $members = array();



 
  public function __construct($name, $humanPlayer, $computer_player) {
    $this->members[] = $humanPlayer;
    $this->members[] = $computer_player;


    $this->attackspeed = $humanPlayer->attackspeed + $computerPlayer->attackspeed;
    $this->abilitypower = $humanPlayer->abilitypower + $computerPlayer->abilitypower;
    $this->armor = $humanPlayer->armor + $computerPlayer->armor;
    $this->attackdamage = $humanPlayer->attackdamage + $computerPlayer->attackdamage;


    $this->tools = $humanPlayer->tools;


    parent::__construct($name);
  }
}