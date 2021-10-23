<?php 
// In mathematics, the factorial of a non-negative integer n, denoted by n!, is the product of all positive integers less than or equal to n:
// e.g. n! = n.(n-1).(n-2)....3.2.1 => For example: 4! = 4.3.2.1 = 24 ;
// The value of 0! = 1 ;

for($i=0;$i<=10;$i++){
	$result = 1;
	$valueofJ = "";
	for($j=1;$j<=$i;$j++){
		$valueofJ = $valueofJ.strval($j).".";
		$result *= $j;
	}
	if($i==0 || $i==1){
		echo $i."! = ".$result."<br/>";
	}
	else{
		echo $i."! = ".trim($valueofJ,".")." = ".$result."<br/>";
	}
}

?>