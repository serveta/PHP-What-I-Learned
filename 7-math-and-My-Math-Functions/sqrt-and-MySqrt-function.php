<?php 
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's sqrt() function: </b>";
echo sqrt(36);
myLine();

function mySqrt($num){
	if($num == 1 || $num == 0){
		return $num;
	}
	if($num<1){
		return "NAN";
	}
	$result = 0;
	for($i=0;$i<$num;$i+=0.0001) {
		$result = $i*$i;
		if($result >= $num){
			if(strpos($i, ".00")){
				setType($i,"integer");
				return $i;
				break;
			}
			return $i;
			break;
		}
	}
}
echo "<b>It's mySqrt() function: </b>";
echo mySqrt(36);
myLine();
?>