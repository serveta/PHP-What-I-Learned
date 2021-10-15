<?php
$number = 6;
$text = "My name is Servet :)";

echo "<b>Data type of number value: </b> ".gettype($number);
echo "<br/><b>Data type of text value: </b> ".gettype($text);

settype($number, "bool");
echo "<br/><b>Data type of number value: </b> ".gettype($number);
?>