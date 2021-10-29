<?php 

function fibonacci($x){
	if($x<=1)return 1;
	return fibonacci($x-1)+fibonacci($x-2);
}

$seq=11;

for($i=0;$i<=$seq;$i++){
	echo fibonacci($i)."<br/>";
}

?>