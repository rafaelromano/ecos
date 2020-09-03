<?php
// Conecta-se com o MySQL
$servername = "localhost";
$database = "ecos";
$username = "ecos";
$password = "acesso@";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);

?>

