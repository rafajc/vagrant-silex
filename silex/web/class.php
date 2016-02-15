<?php
class calculator {
	public function sum($x, $y) {
		return $x + $y;
	}
	
	public function mul($x, $y) {
		return $x * $y;
	}
	
	public function fak($n) {
		if ($n == 0)
			return 1;
		return $this->fak($n-1) * $n;
	}
}
//--------------------------------------------
//--------------------------------------------
//--------------------------------------------
	$calc = new calculator();

	for ($i = 0; $i < 10; $i++) {
		echo "$i + $i = " . $calc->sum($i, $i) . "<br>";
		echo "$i * $i = " . $calc->mul($i, $i) . "<br>";
		echo "$i! = " . $calc->fak($i) . "<br>";
		echo "<hr>";
	}


?>