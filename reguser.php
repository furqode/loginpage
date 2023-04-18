<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "login";

$con = mysqli_connect($servername, $username, $password, $db);

if (isset($_POST["submit"])) {
    $user = htmlspecialchar($_POST["username"]);
    $userpass = htmlspecialchar($_POST["userpass"]);
    $displayname = htmlspecialchar($_POST ["displayname"]);
    $useremail = htmlspecialchar($_POST ["useremail"]);

    $sql = "INSERT INTO users (username, userpass, displayname, useremail) VALUES ('$user', '$userpass', '$displayname', '$useremail')";
    
    if (mysqli_query($con, $sql)) {
        echo "Data stored successfully!";
    } else {
        echo "Some error occured!";
    }
}
?>