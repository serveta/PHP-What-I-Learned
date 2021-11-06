<?php 
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's floor() function: </b>";
echo floor(12.456);
myLine();

function myFloor($num){
	if(getType($num)=="double"){
		setType($num, "int");
		return $num;
	}
	return $num;
}
echo "<b>It's myFloor() function: </b>";
echo myFloor(12.456);
myLine();
?>