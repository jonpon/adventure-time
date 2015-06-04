<?php

class Team extends Character {
  //a members array in case we need to track who is in the team
  public $members = array();

  //give team the same skills/strengths as player classes so we don't
  //have to change any existing code (winChances, playChallenge etc)
  public $attackspeed;
  public $abilitypower;
  public $attackdamage;
  public $armor;
  public $tools;

  //not using references as no player property values will be affected
  public function __construct($name, $players, $computer_player) {
    $this->members[] = $players;
    $this->members[] = $computer_player;

    // sum skill points of team members
    $this->attackspeed = $humanPlayer->attackspeed + $computerPlayer->attackspeed;
    $this->abilitypower = $humanPlayer->abilitypower + $computerPlayer->abilitypower;
    $this->attackdamage = $humanPlayer->attackdamage + $computerPlayer->attackdamage;
    $this->armor = $humanPlayer->armor + $computerPlayer->armor;

    //how to add tools to a team
    $this->tools = $humanPlayer->tools;

  }
}