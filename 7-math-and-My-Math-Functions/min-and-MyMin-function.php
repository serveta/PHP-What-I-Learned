<?php 
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's min() function: </b>";
echo min(-5,-8,0,-8,1,-7,-9,77,4,5,7);
myLine();

function myMin(){
	$num = array();
	if(func_num_args()>1){
		$a=0;
		$args = func_get_args();
		foreach($args as $key){
			$num[$a] = $key;
			$a++;
		}
		
		$x=0;
		$y=0;
		if($num[0]<$num[1]){
			$z = $num[0];
		}
		else{
			$z = $num[1];
		}
		if(count($num)>2){
			for($i=0;$i<count($num)-2;$i++){
				if($num[$i+1]<$num[$i+2]){
					if($num[$i+1]<$z){
						$z = $num[$i];
					}
				}
				else{
					if($num[$i+2]<$z){
						$z = $num[$i+2];
					}
				}
			}
		}
		return $z;
	}
	else{
		$z = func_get_arg(0);
		return $z;
	}
}
echo "<b>It's myMin() function: </b>";
echo myMin(-5,-8,0,-8,1,-7,-9,77,4,5,7);
myLine();
?>