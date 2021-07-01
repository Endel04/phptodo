<?php
$title = "foreach 예문";
include('./header.php');
// 05_fruitcolor.php

//content
$basket = array(
"Apple" => "red",
"Peach" => "Pink",
"Banana" => "Yellow");

foreach($basket as $fruit){
	print($fruit."<br>");
} //end of foreach

include('./footer.php');
?>