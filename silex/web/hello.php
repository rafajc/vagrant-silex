<?php
	echo "Hello World!<br>";
	echo "The server time is " . time() . ".<br>";
	echo "<hr/>";
	for ($i = 1; $i < 10; $i++) {
		echo $i . " is ";
		echo $i % 2 == 0 ? "even" : "odd";
		echo "<br>";
	}
	echo "<hr/>";
	$capital = array(
		"Germany" => "Berlin",
		"France" => "Paris",
		"Belgium" => "Bruessel"
	);

	foreach ($capital as $key => $value) {
		echo "The capital of " . $key . " is " . $value . ". <br>";
	}
?>