<html>
 <head>
 <title>Writing PHP Function with Parameters</title>
 </head>
 <body>
 <?php
 function addFunction($num1, $num2) {
 $sum = $num1 + $num2;
 echo "Sum of the two numbers is : $sum";
 }
 addFunction(111, 222);
 ?>
 </body>
</html> 