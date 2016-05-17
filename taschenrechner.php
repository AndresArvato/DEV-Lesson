<!doctype html> 
<html>
<head> 
	<title>Taschenrechner</title>
</head>
<body>

<form method="post">
    <p>Gib die erste Zahl ein: <input type="text" name="zahl1" /></p>
	<p>Gib die zweite Zahl ein: <input type="text" name="zahl2" /></p>
	<p>Wähle deine Rechenoption: <p>
	<p><input type="Radio" name="option" value="1" /> Plus <p>
	<p><input type="Radio" name="option" value="2" /> Minus <p>
	<p><input type="Radio" name="option" value="3" /> Mal <p>
	<p><input type="Radio" name="option" value="4"  /> Geteilt <p>
    <input type="submit" value="rechnen" name="submitBtn" />
</form>

</body>
</html>

<?php
$ergebnis = "";

if (!isset($_POST['zahl1'])
	or $_POST['zahl1'] == "") 
{	echo "Erste Zahl nicht eingetragen <br />\n";
} if (isset($_POST['zahl1'])) {
	$zahl1 = $_POST['zahl1'];
} if (!isset($_POST['zahl2'])
	or $_POST['zahl2'] == "") 
{	echo "Zweite Zahl nicht eingetragen <br />\n";
} if (isset($_POST['zahl2'])) {
	$zahl2 = $_POST['zahl2'];
} if (!isset($_POST['option'])) {
	$option = 0;
	echo "Keine Rechenoption gewählt <br />\n";
} if (isset($_POST['option'])) {
	$option = $_POST['option'];
}

if ($option == 1) {
	$ergebnis = $zahl1 + $zahl2; 
} if ($option == 2) {
	$ergebnis = $zahl1 - $zahl2;
} if ($option == 3) {
	$ergebnis = $zahl1 * $zahl2;
} if ($option == 4) {
	$ergebnis = $zahl1 / $zahl2;
} if (is_numeric($ergebnis)){
	echo "Das Ergebnis lautet: ". $ergebnis;
}

?>