<html>
<head><title> Data Entry </title></head>
<body>
    <h1>Student Form</h1>
<form method="post" action="">
    <label for="name">Name:</label>
    <input name="name" type="text" required><br><br>
    
    <label for="name">Email:</label>
    <input name="email" type="email" required><br><br>
    

    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
include("db_con.php");
extract($_POST);
if(isset($_POST["submit"])){
$sql="insert into users(name,email) values('$name','$email')";

$query=mysqli_query($con,$sql)or die(mysqli_error($con));
echo "Data inserted successfully.";
}

?>


