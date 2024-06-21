<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname  = "vendadb"; 
$con = mysqli_connect("$localhost", "$username", "$password", "$dbname");

if($con->connect_error) {    

die("connection failed" . $con->connect_error); 

}