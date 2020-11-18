<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost'); //server address
define('DB_USERNAME', 'root'); //database username
define('DB_PASSWORD', ''); //server password - if any
define('DB_NAME', ''); //database name
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<!-- /* Call this config script using the 
"require_once("db_connect.php");" method in the form.php file */ -->