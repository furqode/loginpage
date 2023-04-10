<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "login";

$con = mysqli_connect($servername, $username, $password, $db);

if (isset($_POST["submit"])) {
    echo "cringe";
}
?>