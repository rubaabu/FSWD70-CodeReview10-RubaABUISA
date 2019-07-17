
<?php
$servername = "localhost";
$username = "root"; 
$password = "" ; 
$dbname = "cr10_name_surname_biglibrary";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error());
}



?>