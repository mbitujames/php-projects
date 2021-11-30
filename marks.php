<!DOCTYPE html>
<?php
<form method='POST'>
   <h2>Enter your marks:</h2>
 <input type="number" name=",arks">
 <input type="submit" value="Submit marks">
 </form>

if ($marks>=71 && $marks<=100 )
{
	$grade = "Distinction";
}
else if($marks>=61 && $marks<=70 )
{
	$grade = "Credit";
}
else if($marks>=51 && $marks<=60 )
{
	$grade = "Pass";
}
else if($marks>0 && $marks<=50 )
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?>