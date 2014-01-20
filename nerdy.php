<?php
	class OMGNerds { 
		private $worldPop = 6000000000;

		function findRacquetballers() { // estimation: 14,000,000
			return 14000000 / $this->worldPop; 
		}

		function findCoders() { // I'd guess 2% of the poulation
			return $this->worldPop * .02; 
		}

		function findBoth() { 
			if ($this->findRacquetballers() > $this->findCoders()) { 
				return (float) $this->findCoders() / $this->findRacquetballers(); 
			} else { 
				return (float) $this->findRacquetballers() / $this->findCoders(); 
			}
		}
	}	
	
	$N = new OMGNerds(); 
	echo sprintf("What percentage of the population codes and plays racquetball, you ask? %e.\n", $N->findBoth());
?>
