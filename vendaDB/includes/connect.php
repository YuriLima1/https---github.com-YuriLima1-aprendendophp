<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname  = "vendaDB"; 
$con = mysqli_connect("$localhost", "$username", "$password", "$dbname");

if($con->connect_error) {    

die("connection failed" . $con->connect_error); 

}