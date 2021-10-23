<?php 

// One way to create an array
$name = array("Ahmet","Mehmet","Ayşe");

//row number - $name[index];
echo "1- ".$name[0]."<br/>"; // Ahmet
echo "2- ".$name[1]."<br/>"; // Mehmet
echo "3- ".$name[2]."<br/>"; // Ayşe

echo "\$name array has ".count($name)." elements.<br/>";

$surname = array("Kara","Kaya","Arslan");

// If I want to merge arrays;
$nameAndSurname = array_merge($name, $surname);

echo "<br/><b>After the merge_array</b><br/>";
// get the whole elements with foreach loop
foreach($nameAndSurname as $val){
	echo $val."<br/>";
}

echo "<br/>-----------------------<br/>";

// Multidimensional array
$hotel = array(
			"floor1"=>array("room1"=>"Ayfer","room2"=>"Mehmet","room3"=>"Kübra"),
			"floor2"=>array("room1"=>"Hatice","room2"=>"Fatma"),
			"floor3"=>array("room1"=>"Özgür","room2"=>"Mert")
			);

echo "<pre>"; // <pre> is an HTML tag
print_r($hotel); // The print_r() function prints the information about a variable in a more human-readable way.
echo "</pre>";

echo "Get an element from the multidimensional array[floor3][room1]: <b>".$hotel["floor1"]["room3"]."</b>";
echo "<br/>\$hotel array has <b>".count($hotel)."</b> elemants and floor1 has <b>".count($hotel["floor1"])."</b> elements.<br/>";

echo "<br/><b>in_array</b> function;<br/> in the \$hotel['floor1'] array is there Mehmet?<br/>";
if(in_array("Mehmet",$hotel["floor1"])){
	echo "There is.";
}
else{
	echo "Nope.";
}

echo "<br/><hr/>";

echo "<br/>Sorting the elemants<br/>";

$numbers = array(1,87,10,55,69,99);

sort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
rsort($numbers);

echo "<pre>";
print_r($numbers);
echo "</pre>";

?>