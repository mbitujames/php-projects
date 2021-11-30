</php
$x= 24;#global scope
function myFunction()
{
	$y =59;"
	echo "Variable x is: $x  <br/>";
	echo "Variable y is: $y <br/>";
}
myFunction();
echo "Variable x is: $x";
echo "<br/>"
echo "Variable y is: $y";
?>