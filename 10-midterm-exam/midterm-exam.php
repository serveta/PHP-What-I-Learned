<?php
//Question-1: Without using the strlen() function measure a string length.

function myStrLen($val){
    $arr = array();
    for($i=0;$i<99999;$i++){
        $arr[$i] = substr($val,$i,1);
        if(empty($arr[$i])){
            break;
        }
    }
    echo count($arr)-1;
}

myStrlen("hellO"); // 5

echo "<br/><br/>";

// Q-2: How to write a multidimensional array?

$tv = array(
		"channel1"=>array("movie1"=>"movieCharacter1","movie2"=>"movieCharacter2"),
		"channel2"=>array("movie1"=>"movieCharacter1","movie2"=>"movieCharacter2"),
		"channel3"=>array("movie1"=>"movieCharacter1","movie2"=>"movieCharacter2")
	);
			
// Q-3: Which function help you to separate a sentence. Write an example.

$str = "Hello world. It's an example.";
print_r(explode(" ",$str));

echo "<br/><br/>";

// Q-4: Write the codes for the output below with "for loops".
/*
012345
123450
234501
345012
450123
501234
012345
123450
234501
345012
450123
501234
*/

for($s=0;$s<2;$s++){
	for($i=0;$i<6;$i++){
		for($j=$i;$j<6;$j++){
			echo $j;
		}
		if($i>0){
			for($k=0;$k<$i;$k++){
				echo $k;
			}
		}
		echo "<br/>";
	}
}

?>
