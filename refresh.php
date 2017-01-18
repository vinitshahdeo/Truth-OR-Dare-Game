<?php
$choice=$_GET['choice'];
if($choice=='truth')
{
	$arr=@file("truth.txt");
	$i=@array_rand($arr);
	$dare = $arr[$i];
	echo "<p style='color: #fff; font-weight:bold'>$dare</p>";
}
else
{
	$arr=@file("dare.txt");
	$i=@array_rand($arr);
	$dare = $arr[$i];
	echo "<p style='color: #fff; font-weight:bold'>$dare</p>";
}

?>