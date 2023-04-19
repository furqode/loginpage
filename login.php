<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "login";

$con = mysqli_connect($servername, $username, $password, $db);

if (isset($_POST['submit'])) {

    $user = $_POST['username'];
    $userpass = $_POST['userpass'];

    // selecting the userpass from the users table

    $sql = "SELECT userpass FROM users WHERE username='$user'";
    
    // fetching the user passwords and store them in an array
    
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    

    //decrypt the password and verify the user

    
    if (mysqli_num_rows($result) == 0) {
        echo "Invalid user or password!";
    } else {

        $hashedpass = $row['userpass'];
        password_verify($userpass, $hashedpass);
        echo "Welcome $user";
    }

}

?>