<?php

# Array definieren und zugreifen

$wochentage = array("Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag","Sonntag");
echo $wochentage[1];

# wochentage hat nun 7 Werte (Montag-Sontag). Über wochentage[1] wird auf das zweite Array zugegriffen, da mit 0 begonnen wird.

# Assoziative Array definieren und zugreifen

$wochentage = array("mo" => "Montag","di" => "Dienstag","mi" => "Mittwoch","do" => "Donnerstag","fr" => "Freitag","sa" => "Samstag","so" => "Sonntag");
echo $wochentage["mo"];

# wochentage hat nun 7 Werte (Montag-Sontag). Über wochentage["mo"] wird auf das erste Array zugegriffen.

# Weitere Werte einem Arry hinzugefügt

$wochentage = array("Dienstag","Mittwoch","Donnerstag","Freitag","Samstag","Sonntag");
$wochentage[] = "Montag";

echo $wochentage[6];

# Der Montag wird nachträglich dem Array hinzugefügt und wird hinten angefügt. Daher ist der Tag dann über wochentage[6] aufrufbar, da mit 0 begonnen wird. 

?>

