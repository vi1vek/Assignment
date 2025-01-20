<html>
<head>
<title> Edit student data </title></head>
<body>
<h1>Data Edit</h1>
<?php
extract($_GET);
include("db_con.php");
$sql="select * from users where id=$v";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{
$s_id=$row['id'];
$name=$row['name'];
$email=$row['email'];
}?>
<form action="" method="POST">
<input type="hidden" name="s_id" value=<?php echo $s_id;?>>
<label for="name">Name:</label>
<input type="text" name="name" value=<?php echo $name;?> required><br><br>
<label for="email">Email:</label>
<input type="email" name="email" value=<?php echo $email;?> required><br><br>
<input type="submit" name="s1">
</form>
</body>
</html>
<?php
extract($_POST);
if(isset($_POST['s1'])){
$sql="update users set name='$name',email='$email' where id=$s_id";
$query=mysqli_query($con,$sql);
header('location: student_view.php');
}
?>

