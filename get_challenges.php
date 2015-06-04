<?php

include_once("nodebite-swiss-army-oop.php");

$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "adventure_time"
));

$latestChallenge = $_REQUEST["getChallenge"];


  $randomChallenge = $latestChallenge;
  while ($randomChallenge== $latestChallenge) {
    $randomChallenge = rand(0, count($ds->challenges)-1);
  }

//remove old challenge
unset($ds->ongoing_challenge);

//add the new one
$ds->ongoing_challenge[] = $ds->challenges[$randomChallenge];

//and echo it out
echo(json_encode($ds->ongoing_challenge[0]));