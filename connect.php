<?php
$aa=$_POST['name1'];
$bb=$_POST['email'];
$cc=$_POST['pass1'];
$dd=$_POST['num'];
if($aa==""||$bb==""||$cc==""||$dd=="")
{
	echo "Fill out all the fields";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("net");

$query="SELECT * FROM camp WHERE name='$aa' AND email='$bb'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
	$query1="INSERT INTO camp VALUES('$aa','$bb','$cc',$dd)";
	mysql_query($query1);
	echo "hogya";
}
else
{
	echo "User exists";
}
}
?>
