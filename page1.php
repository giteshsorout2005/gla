<?php
session_start();
$servername="localhost";
$username="root";
$password="root";
$dbname="gla";

$name=$_GET['n1'];
$branch=$_GET['n2'];
$section=$_GET['n3'];
$email=$_GET['n5'];

$connt = new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO hostel values ('$name' , '$branch', '$section','$email')";

$reasult = $connt->query($sql);

if($reasult === True)
{
header("location:page2.php");
}
echo"data save successfully";
$connt->close();
?>
