<?php
$localhost=("0.0.0.0");
$user="root";
$pass="root";
$db="sql1";
$con=mysqli_connect($localhost,$user,$pass,$db);
if(isset($_POST['save'])){
$tdo=$_POST['tdo'];
$con->query("INSERT INTO  data(todo) VALUES('$tdo')");
}
?>
