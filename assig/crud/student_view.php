<html>
<head>
<title>Data view</title></head>
<body>
<h1>Student data</h1>
<table border="1" cellpadding="6" cellspacing="2">
    <tr><th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
<?php
include("db_con.php");
$sql="select * from users";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{?>
<tr>
<td><?php echo $row['id']; ?> </td>
<td><?php echo $row['name']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td><a href="edit.php?v=<?php echo $row['id']; ?>">EDIT</a></td>
<td><a href="delete.php?v=<?php echo $row['id']; ?>">DELETE</a></td>
</tr>
<?php } ?>
</table></body>
</html>
