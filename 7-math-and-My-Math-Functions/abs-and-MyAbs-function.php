<?php
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's abs() function: </b>";
echo abs(-8);
myLine();

function myAbs($num){
	if($num<0){
		return $num*-1;
	}
	return $num;
}
echo "<b>It's myAbs() function: </b>";
echo myAbs(-8);
myLine();
?>