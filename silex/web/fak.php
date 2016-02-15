<?php
function fak($n) {
	if ($n == 0)
		return 1;
	return fak($n-1) * $n;
}


	if (isset($_GET["name"]) )
		echo "Hello " . $_GET["name"];
	else
		echo "Hello World!";
	
	echo "<br><hr>";
	

	if (isset($_GET["limit"]) && is_numeric($_GET["limit"]))
		$a = $_GET["limit"];
	else
		$a = 10;

	for ($i=$a; $i >= 0; $i--) {
		echo $a-$i . "! = " . fak($a-$i) . "<br>";
	}
	echo "<hr>";

	$a = array("London", "Berlin", "Parins", "Warsaw");
	
	echo "ASC: <br>";
	asort($a);
	echo implode(", ", $a);
	echo "<br>DESC:<br>";
	arsort($a);
	echo implode(", ", $a);
	
?>