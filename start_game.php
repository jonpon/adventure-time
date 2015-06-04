<?php

include_once("nodebite-swiss-army-oop.php");
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "adventure_time"
));

unset($ds->players);
unset($ds->computer_player);
unset($ds->tools);
unset($ds->challenges);

$players = &$ds->players;
$computer_player = &$ds->computer_player;
$tools = &$ds->tools;
$challenges = &$ds->challenges;

if (isset($_REQUEST["playerName"]) && isset($_REQUEST["playerClass"])) {
  $create_player = $_REQUEST["playerName"];
  $create_class = $_REQUEST["playerClass"];

  $new_player = New $create_class($create_player);
  $players[] = &$new_player;

  } 
else {
  echo(json_encode(false));
  exit();
  }

  $badguyName = $_POST['badguyName'];

  $badguyName = array(
      "Ice King",
      "Marceline",
      "Lumpy Space Princess"
    );

    $random_badguy_name = mt_rand(0,2);
    $human = New Badguy($badguyName[$random_badguy_name]);

$all_classes = array("Hero", "Princess", "Badguy");
$random_class = $create_class;
while ($create_class == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}

$heroName = array(
      "Lady Rainicorn",
      "Flame Princess",
      "Lumpy Space Princess"
    );

    $random_hero_name = mt_rand(0,2);
    $computer_player[] = New $random_class($heroName[$random_hero_name]);


$random_class2 = $random_class;
while ($create_class == $random_class || $random_class2 == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}


$badguyName = array(
      "Ricardio",
      "Magic Man",
      "Martin"
    );

    $random_badguy_name = mt_rand(0,2);
    $computer_player[] = New $random_class2($badguyName[$random_badguy_name]);


$tools = array();

	$tools[] = New Tool(
		"Banana",
		array(
			"attackdamage" => 2,
		)
	);

	$tools[] = New Tool(
		"Diamond Sword",
		array(
			"abilitypower" => 600,
		)
	);


	$tools[] = New Tool(
		"Crows",
		array(
			"armor" => 10,
		)
	);

	$tools[] = New Tool(
		"Weird Crystal",
		array(
			"abilitypower" => 90,
		)
	);

	$tools[] = New Tool(
		"Book of Heroes",
		array(
			"attackdamage" => 20,
		)
	);

	$tools[] = New Tool(
		"Old Sandwich",
		array(
			"abillitypower" => 20,
		)
	);

	$tools[] = New Tool(
		"Nice Cape",
		array(
			"armor" => 20,
		)
	);

	$tools[] = New Tool(
		"Burrito",
		array(
			"health" => 44,
		)
	);

	$tools[] = New Tool(
		"Soda",
		array(
			"attackdamage" => 60,
		)
	);

$challenges = array();

	$challenges[] = New Challenge(
		"A princess is captured by a skeletal mermaid".
		"you have to fight it to kiss the princess!",
		array(
			"attackspeed" => 80,
			"abilitypower" => 95,
			"attackdamage" => 40,
			"armor" => 10
			

		)
	);

	$challenges[] = New Challenge(
		"You learn that Clone James has been faking his death 
		 in order to collect medals". 
		 " After discovering that there are, in fact, 25 Jameses on the loose, 
		  Princess Bubblegum orders them to be arrested.".
		"You have to fight them to get the job done!",
		array(
			"attackspeed" => 10,
			"abilitypower" => 20,
			"attackdamage" => 50,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"You enter the City of Thieves with your best bud to confront a thief
		 who is believed to have stolen a flower basket from a little girl named Penny".
		"You find the thief, but you have to fight her for it!",
		array(
			"attackspeed" => 15,
			"abilitypower" => 45,
			"attackdamage" => 60,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"You are playing by the ocean, and you encounter The spectral Fear Feaster (voiced by Mark Hamill)".
		" who taunts you about you fear of water!! Fight it!!",
		array(
			"attackspeed" => 25,
			"abilitypower" => 40,
			"attackdamage" => 65,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"You pursue a havoc-wreaking 'Gut Grinder' — a creature that steals and eats others gold!".
		" You chase it to a poolparty where you have to battle it while looking cool in a swimsuit, super hard!",
		array(
			"attackspeed" => 80,
			"abilitypower" => 65,
			"attackdamage" => 60,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"You decide to explore a dungeon in 11 minutes in order to find the Crystal Eye".
		 " but its full of creepy crepes who you have to eat in order to get your precious Eye!",
		array(
			"attackspeed" => 15,
			"abilitypower" => 75,
			"attackdamage" => 50,
			"armor" => 60
		)
	);

	$challenges[] = New Challenge(
		"After being transformed into a foot by Göran Persson (voiced by Göran him self)".
		" you goes to live with a band of misfits. The group realizes that by working together".
		" they can overcome Göran Persson. But you still have to fight him!",
		array(
			"attackspeed" => 80,
			"abilitypower" => 50,
			"attackdamage" => 40,
			"armor" => 70
		)
	);

	$challenges[] = New Challenge(
		"You help a grass ogre named Donny turn his life around, without realizing the ecological damage". 
		" you may be causing in the process. After you realize that Donny's obnoxious personality is necessary for nature,". 
		" you have to try and reverse your aid.",
		array(
			"attackspeed" => 50,
			"abilitypower" => 55,
			"attackdamage" => 40,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"The great warrior Billy inspires you to practice nonviolence, but you find it difficult to resist old ways.".
		" You eventually confront Billy, and manage to successfully explain to him that violence is sometimes necessary.",
		array(
			"attackspeed" => 50,
			"abilitypower" => 55,
			"attackdamage" => 40,
			"armor" => 30
		)
	);

	$challenges[] = New Challenge(
		"You try to commit a cosmic crime in order to gain access to a 
		 multiverse prison called the Citadel, in which Finn's father is trapped. ".
		" However, having being in a comatose state since his previous plan was ruined, the Lich 
		  wakes up and he want to kill you!",
		array(
			"attackspeed" => 90,
			"abilitypower" => 15,
			"attackdamage" => 20,
			"armor" => 40
		)
	);

echo(json_encode(array($ds->players)));


