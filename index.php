<?php

require 'TimeTravel.php';

//creating object
$traveler = new TimeTravel(new dateTime('1985-12-31 0:0:0'),new dateTime());

//Finding Date
$traveler->findDate(-1000000000);

//Printing Infos about interval
echo $traveler->getTravelInfos() . '<br><br><br>';

//Printing each steps for going back to th future :
echo 'Pit stops : <br><br>';

foreach ($traveler->backToTheFutureStepByStep('P1M8D') as $value){
    echo $value->format('d F Y') . '<br>';
}