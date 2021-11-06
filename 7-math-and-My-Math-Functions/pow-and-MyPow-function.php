<?php 
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's pow() function: </b>";
echo pow(5,3);
myLine();

function myPow($base, $exponent){
	$result = 1;
	for($i=1;$i<=$exponent;$i++) {
		$result*=$base;
	}
	return $result;
}
echo "<b>It's myPow() function: </b>";
echo myPow(5,3);
myLine();
?>