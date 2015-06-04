<?php

//Nodebite black box
include_once("nodebite-swiss-army-oop.php");

//create a new instance of the DBObjectSaver class 
//and store it in the $ds variable
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "adventure_time",
));



/**
 * If this script receives an AJAX call to reset data
 * Empty main story components
 *
 */

if (isset($_REQUEST["startOver"])) {
  unset($ds->players);
  unset($ds->computer_player);
  unset($ds->tools);
  unset($ds->challenges);
}

echo(json_encode(true));