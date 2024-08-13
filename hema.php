<html>
<head>
</title>Todos</title>
</head>
<body>
<div class="row justify-content-center">
<form action="connection.php" method="POST">
<div class="form-group">
TODO:<input type="text" name="tdo" class="form-control" placeholder="what todo"/></div>
<button type="submit" class="btn primary" name="save">SAVE</button>
</form>
</div>

<?php require_once'connection.php';?>
<div>
<?php
$localhost=("0.0.0.0");
$user="root";
$pass="root";
$db="sql1";
$con=mysqli_connect($localhost,$user,$pass,$db);
$result=$con->query("SELECT*FROM data");?>
<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>todo</th>
<th colspan="2">Action</th>
<tr></thead>
<?php
while($row=$result->fetch_assoc()):
?>
<tr><td>
<?php echo $row['todo'];?></td>
<td><ahref="hema.php?edit=<?php echo $row['id'];?>"class="btn-into">edit</a>
<ahref="connection.php?edit=<?php echo $row['id'];?>"class="btn-into">Delete</a>
</td>
</tr>
<?php endwhile?>
</table>
</div></div>

</body>
</html>
