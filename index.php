<?php

include_once "Lift.php";

$lift = new Lift();

$curr = $_GET['current'];
$move = $_GET['move'];


$lift->setCurrentFloor($curr);
echo $lift->move($move);