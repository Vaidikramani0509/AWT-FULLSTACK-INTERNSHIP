<?php 
echo "Welcome to the stage where we are ready to get connected to a date";
echo "<br>";
/*
Ways to connect to a MySQL Database
1. MySQLi extension:a-Object Oriented b-Procedural
2. PDO
*/
// Connecting to the Database
$servername = "localhost";
$username="root";
$password= "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect:<br><br> ". mysqli_connect_error());
}
else{
    echo "Connection was successful.<br><br>";
}

$sql= "CREATE DATABASE dbSOP1";
$result = mysqli_query($conn,$sql);

if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error...";
}

?>