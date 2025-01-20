<?php
include("db_con.php");

$id = $_GET['v'];
$sql = "DELETE FROM users WHERE id = $id";
$query = mysqli_query($con,$sql);

if ($query) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ";
}

?>
