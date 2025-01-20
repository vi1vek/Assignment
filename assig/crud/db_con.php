<?php
$host="localhost";
$user="root";
$password="";
$dbname="test";
$con=mysqli_connect($host,$user,$password,$dbname)or die("database connection error");
if(!$con){
    echo "Failed top Connect";
}
?>
