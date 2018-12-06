
<?php
// If you have and array $arr = [0,1,2,3,4]; How do you extract the third value?

$arr1 = [0,1,2,3,4];
echo "Q1 : ".  $arr1[2]."</br>";
echo "</br>";
//If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; How do you extract the third value?

$arr2 = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
echo "Q2 : ".  $arr2["two"]."</br>";
echo "</br>";

//Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".

$a = "a,b,c,d,e,f";
$a1 = explode( ",", $a );

echo "Q3 : ";
var_dump($a1)."</br>";
echo "</br>";
echo "</br>";

//With the result array from 3, create a new array where each element is both key and value. In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”,   "d"=>"d", "e"=>"e"]

$new_array = array_combine($a1, $a1);

// $new_array = array();
// foreach( $a1 as $element ) {
//     $new_array[ $element ] = $element;
// }

echo "Q4 : ";
var_dump( $new_array)."</br>";
echo "</br>";

//Find the sum of this array of numbers $arr = [0, 1, 2, 3, 4, 5, 6];

echo "</br>";
$arr3 = [0, 1, 2, 3, 4, 5, 6];
echo "Q5 : ". array_sum($arr3)."</br>";


//Write a PHP function to find the maximum and minimum marks from the following set of arrays:

$marks1 = [360,310,310,330,313,375,456,111,256];
$marks2 = [350,340,356,330,321];
$marks3 = [630,340,570,635,434,255,298];
$result = array_merge($marks1, $marks2, $marks3);
echo("</br>"); 
echo "Q6.1 : ". max($result). "</br>"; 
echo("</br>"); 
echo "Q6.2 : ". min($result). "</br>"; 
echo("</br>"); 


//Write a PHP function to generate a string with 11 random letters and numbers.

$str = substr(md5(time()), 0, 11);
echo "Q6.3 : ". $str. "</br>";
echo("</br>"); 
//........................................
// $numbers = range(0, 10);
// shuffle($numbers);
// foreach ($numbers as $number) {
//     echo "$number";  
// }
// echo "</br>";
// echo "</br>";
//.........................................
$letters = range("a", "k");
shuffle($letters);
foreach ($letters as $letters) {
    echo "$letters";  
}
echo "</br>";
echo "</br>";

//Giving a sentence, write a PHP script that:

$sentence = 'we arE taKing php claSs';

//Transform all characters to uppercase.

echo "Q6.4 : ".(strtoupper($sentence)). "</br>";
echo("</br>"); 

//Transform all characters to lowercase.
echo "Q6.5 : ". strtolower($sentence). "</br>";
echo("</br>"); 
//Make the first character uppercase.

echo "Q6.6 : ". ucfirst($sentence). "</br>";
echo("</br>"); 

//Make the first character of all the words uppercase.

echo "Q6.7 : ". ucwords($sentence). "</br>";
echo("</br>"); 

//Write a PHP script to extract the file name from a path, in example: “http://www.example.com/public_html/index.php”

// $current_file_name = basename($_SERVER['PHP_SELF']);
// echo "Q6.8 : ". $current_file_name."\n";

$url = 'http://www.example.com/public_html/index.php';
echo "Q6.8 : ". basename($url);