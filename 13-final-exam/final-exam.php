<?php

// Q-1: 
/*
I have a "user.php" page. How can you use the information inside this page on the "session.php" page?

- user.php has the information below.
$name = servet;
$pass = arslan;

*/

// A-1:
include("kullanici.php");
session_start();
$_SESSION["username"] = $name;
$_SESSION["password"] = $pass;

// Q-2: How can you delete the username session and after that dispose of all sessions?
// A-2:
session_start();
session_unset($_SESSION["username"]);
session_destroy();

/* Q-3: How can you create a cookie for only 8 days? 
And how could you update your cookie after that how could you delete your cookie?
*/
// A-3:
setcookie("myCookie","body of my cookie",time()+60*60*192);
setcookie("myCookie","update body of my cookie",time()+60*60*192);
setcookie("myCookie","",time()-1);

/* Q-4: Write a function that solves the following math operation and has the like following output.

Math operation:
1+1/2+1/3+1/4+....+1/50 

Output:
TOPLAM = 4.499205

*/
// A-4:
function solveTheProblem(){
    $sum = 0;
    for($i=1;$i<=50;$i++){
        $sum = 1/$i + $sum;
    }
    
    echo "TOPLAM = ".number_format($sum,6,".",",");
}

solveTheProblem();

// Q-5: Find the perfect numbers between 1-9000. The output should be as below.
/*
Mukemmel Sayilar 1-9000 arasi;
- 6
- 28
- 496
- 8128

*/
// A-5:
echo "Mukemmel Sayilar 1-9000 arasi;<br/>";
for($i=1;$i<=9000;$i++){ 
	$sum = 0;
	$divisions = "";
	for($j=1;$j<$i;$j++){
		if($i%$j==0){
			$sum += $j;
		}
	}
	if($sum == $i){
		echo "- ".$i."<br/>";
	}
}

// Q-6: I have a file path below. How can I learn this file path is correct? 
// $filePath = "C:/Documents/test.txt";

// A-6:
if(is_file($filePath)) {
  echo "It is a regular file.";
} else {
  echo "It is not a regular file.";
}

?>