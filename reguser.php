<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "login";

$con = mysqli_connect($servername, $username, $password, $db);

if (isset($_POST["submit"])) {
    $user = htmlspecialchars($_POST["username"]);
    $userpass = htmlspecialchars($_POST["userpass"]);
    $displayname = htmlspecialchars($_POST ["displayname"]);
    $useremail = htmlspecialchars($_POST ["useremail"]);

    $sql = "INSERT INTO users (username, userpass, displayname, useremail) VALUES ('$user', '$userpass', '$displayname', '$useremail')";
    
    if (mysqli_query($con, $sql)) {
        echo "Data stored successfully!";
    } else {
        echo "Some error occured!";
    }
}
?>