<html>
<body>
<?php
function net ($allowance, $gross){
$tax=0.3*$gross;
$net= $gross + $alowances - $tax;
echo "The net salary is".$net;	
}
net(20000,60000);
?>
</body>
</html>