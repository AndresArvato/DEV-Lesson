<!doctype html> 
<html>
<head> 
	<title>Untergrundfarbwechsel</title>
</head>

<body>
<?php
# Farbe erwuerfeln
  	$color = array(rand(0, 15),rand(0, 15),rand(0, 15),rand(0, 15));
  	
# Array ausgeben
	echo "Urspruenglicher Farbcode <br>";
	for ($zaehler=0; $zaehler < count($color); $zaehler++) {
 	echo $color[$zaehler]. "|"; }
  	
# Umwandeln der Zahlen 10,11,12,13,14,15 in Buchstaben
	
  	if ($color == 10) {
	$color = 'A';
  	} else if ($color == 11) {
	$color = 'B';
  	} else if ($color == 12) {
	$color = 'C';
  	} else if ($color == 13) {
	$color = 'D';
  	} else if ($color == 14) {
	$color = 'E';
  	} else if ($color == 15) {
	$color = 'F';
  	} else {
  	}
  	
# Farbe ausgeben
	echo "Farbcode <br>";
	for ($zaehler=0; $zaehler < count($color); $zaehler++) {
 	echo $color[$zaehler]. "|"; }
 	bgcolor= $color
?>
</body>
</html>

