<?php
require 'autoload.php';

//Kreiranje vozila

$auto = Auto::createAuto(1,['brand' => 'BMW','model'=>'M5','color'=>'bela']);
$auto1 = Auto::createAuto(3,['brand' => 'MAN','model'=>'D26','color'=>'crna']);
$auto2 = Auto::createAuto(4,['brand' => 'Scania','model'=>'S730','color'=>'siva']);
$auto3 = Auto::createAuto(2,['brand' => 'Volvo','model'=>'9400','color'=>'plava']);

//Kreiranje naplatne stanice

$station = Station::createStation('Rampa 1');

//Kreiranje radnika

$worker1 = Worker::createWorker('Petar Markovic');
$worker2 = Worker::createWorker('Dragan Petrovic');

//Dodavanje radnika stanici

$station->addWorker($worker1);
$station->addWorker($worker2);

//Naplata putarine
$worker1->vehicleCharge($auto);
$worker1->vehicleCharge($auto2);
$worker2->vehicleCharge($auto1);
$worker2->vehicleCharge($auto3);


echo '<h3>KALKULACIJA PO RADNIKU:</h3>';
echo 'Radnik '.$worker1->name.' je naplatio '.Worker::calculatePerWorker($worker1).'<br>';
echo 'Radnik '.$worker2->name.' je naplatio '.Worker::calculatePerWorker($worker2).'<br>';
echo '<h3>UKUPNA KALKULACIJA:</h3>';
echo 'Na stanici '.$station->name.' ukupno je naplaceno '.Station::calculateTotal($station);
