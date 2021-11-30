<html>
<body>
<?php
<form method="POST" action="POST.php">
Please enter any number :<input type="text" name="num">
<input type="hidden" name="cnt" value=<?php $cnt=0 ?>>
<input type="submit" name="go">
$i=0;
 if ($_POST['num']!=5)
 {
 $i++;
 echo $i;
 echo "Greater than the first value";
 }
 else 
 echo "Less than the second value";
?>
</body>
</html>

