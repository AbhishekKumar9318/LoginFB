<?php
session_start();
$aa=$_POST['uname'];
$bb=$_POST['pass'];
if($aa==""||$bb=="")
{
	echo "Fill out all the fields";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("net");
$query="SELECT * FROM camp WHERE name='$aa' AND password='$bb'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count!=0)
{
	$_SESSION['name']=$aa;
	header("location:welcome.php");
}
else
{
	echo "mismatch";
}
}
?>