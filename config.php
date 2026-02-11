<?php
// The Nexus - Smart Hospitality Management System
// Database Configuration

$server = "localhost";
$username = "nexus_user";
$password = "password";
$database = "nexushotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('Database connection failed. Please ensure the database is set up correctly.')</script>");
}

?>