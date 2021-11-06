<?php 
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's ceil() function: </b>";
echo ceil(12.456);
myLine();

function myCeil($num){
	if(getType($num)=="double"){
		setType($num, "int");
		return $num+1;
	}
	return $num;
}
echo "<b>It's myCeil() function: </b>";
echo myCeil(12.456);
myLine();
?>