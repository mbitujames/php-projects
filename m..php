<?php
$servername="localhost";
$username ="root";
$password = "";
$db = "test";
$connection=mysqli_connect($servername, $username, $password);
if(!$connection)
{
	echo"Connection failed<br/>";
}
else
{
echo"Connected successfully<br/>";
}
if(!mysqli_select_db($connection,$db))
{
	echo"Database selection failed<br/>";
}
else
{
echo"Database selected successfully<br/>";

}
if(isset($_POST['btnsubmit']))
{
$myname = $_POST['txtname'];
$myemail = $_POST['txtemail'];
$mymessage = $_POST['txtmessage']
}

$sql = "INSERT INTO users(name,email,message) VALUES('$myname','$myemail','$mymessage')";
$result = mysqli_query($connection,$sql);
if(!$result)
{
	echo"Database insertion failed<br/>";
}
else
{
	echo"Record successfully inserted<br/>";
}

?>