<?php
# Farbe  erwuerfeln
	$lookUp = array(10 => 'A', 11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E', 15 => 'F');
  	$color = array("#", rand(0, 15), rand(0, 15), rand(0, 15), rand(0, 15), rand(0, 15), rand(0, 15));
  	
# Array ausgeben
	echo "Urspruenglicher Farbcode: <br>";
	for ($zaehler=1; $zaehler < 7; $zaehler++) {
		if ($color[$zaehler] >= 10) {
			$color[$zaehler] = $lookUp[ $color[$zaehler] ];
		}
  	}
	
# Umwandeln der Zahlen 10,11,12,13,14,15 in Buchstaben
	
# Array in String
	$colorStr = implode ('', $color );
  	
# Farbe ausgegeben
#	echo "Farbcode <br>";
#	for ($zaehler=0; $zaehler < count($color); $zaehler++) {
# 	echo $color[$zaehler]. "|"; }
?>
<!doctype html> 
<html>
<head> 
	<title>Hello World</title>
</head>
<body style = "background-color: <?php echo $colorStr;?>" >

<h1>
<?php echo $colorStr;?>
</h1>

</body>
</html>