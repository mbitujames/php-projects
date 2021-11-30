<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	<input type="number" name="allowance">
	<input type="number" name="gross">

</form>

   <?php
   $allowance = $_POST["allowance"];
$gross=$_POST["gross"];

if (isset($allowance,$gross)){
     function net($gross,$allowance){
     	$tax=0.3*$gross;
     	$net=$gross+$allowance-$tax;
     	echo "The net salary is".$net;
     }
     }

   ?>