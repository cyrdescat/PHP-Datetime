<?php

$presentTime = new DateTime();
$destinationTime = new DateTime("1995-12-19 00:47");


echo "Date actuelle : " . $presentTime->format("M d Y A h i") . "<br>" . PHP_EOL;
echo "Date de destination : " . $destinationTime->format("M d Y A h i") . "<br>" . PHP_EOL;

$interval = $destinationTime->diff($presentTime, true);


echo "Difference : " . $interval->format("%Y Ans, %m Mois, %d Jours, %H Heures et %i minutes") . "<br>" . PHP_EOL;


$minutes = ($presentTime->getTimestamp() - $destinationTime->getTimestamp()) / 60;
$litres = round($minutes / 10000, 2, PHP_ROUND_HALF_UP);

echo "Total de carburant nécéssaire : " . $litres . " litres" . "<br>" . PHP_EOL;