#!/usr/bin/php
<?php
	class SimpleMath { 
		private $num; 
		
		function __construct($num) { 
			$this->num = $num; 
		}

		function squareroot() { 
			$n = 0; 
			while (($n * $n) < $this->num)
				$n++; 

			if (($n * $n) == $this->num) 
				return $n;
			else 
				return -1; 
		}
	}

	$num = $argv[1]; 
	$SM = new SimpleMath($num); 
	echo sprintf("The square root of %s is %s.\n", $num, ($SM->squareroot() != -1 ? $SM->squareroot() : "not a whole number")); 
?>