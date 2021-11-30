<html><head><title> ODD or EVEN</title></head >
<body> 
 <?php
 if (isset($_GET['btn1']))
 {
$a = $_GET['num'];
if ($a % 2==0)
   { 
   	echo "Given number is" . "<br>" . "<b>EVEN<b>" ;
 	}
else
{
echo "Given number is" . "<br>" . "<b>ODD<b>";
}
}
?>
<form name="form1" action="lab6.php" method="GET">
<input type="number" name="num" size="30"><br/>
<input type="submit" name="btn1" value="Input number and click me">
</form>
</body> 
</html>