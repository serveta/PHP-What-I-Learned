<?php 
echo "<b>Non-Return Fonctions => myPow() and drawALine()</b> </br>";
function drawALine(){
	for($i=1;$i<=30;$i++) echo "-";
		echo "</br>";
}	

drawALine();

function myPow($base, $exponent){
	$result = 1;
	for($i=1;$i<=$exponent;$i++) {
		$result*=$base;
	}

	echo $base."^".$exponent.". = ".$result;
	echo "</br>";
}

myPow(2,3);
drawALine();
myPow(15,2);

echo "<br/><br/> <b>- w/ For Loop;</b> <br/>";

for($i=4;$i<=5;$i++){
	for($j=1;$j<=10;$j++){
		drawALine();
		myPow($i,$j);
	}
}



echo "<br/><br/> <b>Return Function => myPow2() </b> </br>";


drawALine();

function myPow2($base, $exponent){
	$result = 1;
	for($i=1;$i<=$exponent;$i++) {
		$result*=$base;
	}

	return $result;
}

$result = myPow2(2,3);
echo $result;
drawALine();
echo myPow2(15,2);

echo "<br/><br/> <b>- w/ For Loop;</b> <br/>";

for($i=4;$i<=5;$i++){
	for($j=1;$j<=10;$j++){
		drawALine();
		echo myPow2($i,$j);
	}
}

?>