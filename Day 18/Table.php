<?php 

$servername="localhost";
$username="root";
$password= "";
$database="dbSOP1";

// Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());    
}
else{
    echo "Connection was successful<br>";
}

$sql = "CREATE TABLE `php1`
(`sno` INT(6) NOT NULL AUTO_INCREMENT ,
`nume` VARCHAR(20) NOT NULL ,`dest` VARCHAR(6) NOT NULL ,
PRIMARY  KEY (`sno`))";

$result = mysqli_query($conn, $sql);

if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was created successfully because of this error!<br>";
}

?>