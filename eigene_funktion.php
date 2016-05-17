<?php

function ausgabe_uhrzeit( )
{
   $wert = date("H:i:s");
   return ($wert);
}


$uhrzeit = ausgabe_uhrzeit();

echo $uhrzeit;


function dividieren ($zahl, $quotient) 
{
	echo bcdiv ($zahl, $quotient);
}

echo "<p>Berechnung von 16 / 2 = ";
dividieren(16,2);

echo "<p>Berechnung von 8 / 2 = ";
dividieren(8,2);






/*
function ausgabe_uhrzeit( )
{
   echo "<p>". date("H:i:s"). "</p>";
}

ausgabe_uhrzeit();

$uhrzeit = ausgabe_uhrzeit ();
*/

?>