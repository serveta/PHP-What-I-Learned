<?php 

$fibonacci = array();

$fibonacci[0]=1;
$fibonacci[1]=1;
for($i=0;$i<10;$i++){
	$fibonacci[$i+2]=$fibonacci[$i+1]+$fibonacci[$i];
}

echo "12 elements in fibonacci sequence;<br/>";
foreach($fibonacci as $val){
	echo $val.",";
}
echo "...";
?>