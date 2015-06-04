<?php

class Challenge extends Base {
  public $description;
  public $skills;
  
  public function __construct($description,$skills){
    $this->description = $description;
    $this->skills = $skills;
  }

    public function howGoodAMatch($person){

    $sum= 0;

    $max = 0;


    foreach($this->skills as $skill => $points){
 
      $needed = $points;

      $has = $person->{$skill}; 


      if (count($person->tools) > 0) {

        for ($i = 0; $i < count($person->tools); $i++) {

          foreach ($person->tools[$i]->skills as $toolSkill => $value) {

            if ($toolSkill == $skill) {

              $has += $value;
            }
          }
        } 
      }

      $sum += $has > $needed ? $needed : $has;
      $max += $needed;
    }

    return $sum/$max;
  }

  public function winChances($persons){
    $matches = array();

    $count = 0;

    foreach($persons as $person){
      $howGoodAMatch = $this->howGoodAMatch($person);

      $matches[] = array(
        "person" => $person,
        "howGoodAMatch" => $howGoodAMatch,
      );

      $count += $howGoodAMatch;
    }

    foreach($matches as &$match){
      $match["winChancePercent"] = round(100*($match["howGoodAMatch"]/$count));
    }
  
    return $matches;
  }

  public function playChallenge($persons){

    $matches = $this->winChances($persons);
 
    $count = 0;
    
    $rand = rand(0,100);
    
   
    foreach($matches as $match){
      if(
        $rand >= $count && 
        $rand <= $match["winChancePercent"] + $count
      ){
      
        return $match["person"];
      } else {
       
      }

      $count += $match["winChancePercent"];
    }
  }
}