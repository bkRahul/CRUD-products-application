<?php 
$hn='localhost';
$un='raul';
$pw='password';
$db='first_db';

$con = mysqli_connect($hn, $un, $pw, $db) or die ('Cannot connect to databse');

$query = "SELECT * FROM products";

 $result = mysqli_query($con, $query) or die ('cannot query database');

while ( $row = mysqli_fetch_array($result)) {
	$id = $row['ID'];
	$name=$row['Name'];
	$price=$row['Price'];
	$created=$row['Created'];
	$modified=$row['Modified'];
	echo $id."<br>";
	echo $name."<br>";	
	echo $price."<br>";
	echo $created."<br>";	
	echo $modified."<br>";	
}
mysqli_close($con);
?>