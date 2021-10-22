<?php 
// The perfect number is if the sum of its divisors excluding itself is equal to itself.
// e.g. => 6 -> 3+2+1

for($i=1;$i<=1000;$i++){ // I want to find the perfect numbers between 1 - 1.000
	$sum = 0;
	$divisions = "";
	for($j=1;$j<$i;$j++){
		if($i%$j==0){
			$sum += $j;
		}
	}
	if($sum == $i){
		echo "I find a perfect number: ".$i." => ";
		for($k=1;$k<$i;$k++){
			if($i%$k==0){
				$divisions = $divisions."+".strval($k);
			}
		}
		$divisions =  ltrim($divisions ,"+");
		echo $divisions."<br/>";
	}
}

?>