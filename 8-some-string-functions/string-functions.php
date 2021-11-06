<?php
function myLine(){
	echo "</br>";
	for($i=1;$i<=40;$i++) echo "-";
		echo "</br>";
}

echo "<b>It's chunk_split() function: </b>";
echo "<br/>";
$text = "I can cut the text after13 characters.";
echo chunk_split($text,13,"<br/>");
myLine();

echo "<b>It's count_chars() function: </b>";
echo "<br/>";
$text = "It's going to count my different characters.";
echo count_chars($text,3);
myLine();

echo "<b>It's explode() function: </b>";
echo "<br/>";
$text = "Arslan:0123456789";
echo "Normal text: ".$text;
echo "<br/>";
$cut = explode(":",$text);
echo "Name: ".$cut[0];
echo "<br/>";
echo "Phone: ".$cut[1];
myLine();

echo "<b>It's printf() function: </b>";
echo "<br/>";
echo $student = 20;
echo "<br/>";
echo $teacher = 1;
echo "<br/>";
printf("There are %d students and, %d teacher.",$student,$teacher);
myLine();

echo "<b>It's number_format() function: </b>";
echo "<br/>";
echo "Before number_format(): ";
echo $number = 12345.87;
echo "<br/>";
echo "After number_format(): ";
echo $my_number_format = number_format($number,2,",",".");
myLine();

echo "<b>It's similar_text() function: </b>";
echo "<br/>";
echo $a="a- computer";
echo "<br/>";
echo $b="b- cartoon";
echo "<br/>";
$sim = similar_text($a, $b, $perc);
echo "similarity(a,b): $sim ($perc %)";
echo "<br/>";
echo $a="a- compare";
echo "<br/>";
echo $b="b- compa";
echo "<br/>";
$sim = similar_text($a, $b, $perc);
echo "similarity(a,b): $sim ($perc %)";
myLine();

echo "<b>It's str_contains() function: </b>";
echo "<br/>";
echo $welcomeing = "Hi there, welcome.";
echo "<br/>";
if(str_contains($welcomeing,"welcome")){
	echo "Yes, he said welcome.";
}
myLine();

echo "<b>It's str_pad() function: </b>";
echo "<br/>";
$input = "Alien";
echo "input is $input <br/>";
echo str_pad($input, 10);                      // produces "Alien     "
echo "<br/>";
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo "<br/>";
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo "<br/>";
echo str_pad($input,  6, "___");               // produces "Alien_"
echo "<br/>";
echo str_pad($input,  3, "*");                 // produces "Alien"
myLine();

echo "<b>It's str_pad() function: </b>";
echo "<br/>";
echo str_repeat("|'_'|*_*|",4)."Alliens are coming...".str_repeat("|'_'|*_*|",4);
myLine();

echo "<b>It's str_replace() function: </b>";
echo "<br/> Wrong sentence: ";
echo $text = "He is such a handsome woman.";
$man = array("handsome", "handsome", "He");
$woman = array("beautiful", "beautiful", "She");
$newText = str_replace($man,$woman,$text);
echo "<br/>Correct sentence: ".$newText;
myLine();

echo "<b>It's str_split() function: </b>";
echo "<br/>";
$str = "Hello from Space";
$arr1 = str_split($str);
$arr2 = str_split($str, 4);
echo "<pre>"; // <pre> is an HTML tag
print_r($arr1);
print_r($arr2);
echo "</pre>";
myLine();

echo "<b>It's trim() function: </b>";
echo "<br/> - text1: ";
echo $text1 = "abcdefghijklmnopqrstuvwxyz";
echo "<br/> - text2: ";
echo $text2 = "abcdefghijklmnopqrstuvwxyz.?-_/+";
echo "<br/>";
echo "<b>trim(text1,\"ajkl\") Trimed:</b> ".trim($text1,"ajkl");
echo "<br/>";
echo "<b>trim(text2,\"a+/\") Trimed:</b> ".trim($text2,"a+/");
myLine();

echo "<b>It's wordwrap() function: </b>";
echo "<br/> - Normal text: ";
echo $text = "The quick brown fox jumped over the lazy dog.";
echo "<br/> - After wordwrap(); <br/>";
$newtext = wordwrap($text, 10, "<br />");
echo $newtext;
myLine();
?>