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
    

    

   

    
    if (mysqli_num_rows($result) == 0) {
        // invalid user
        echo "Invalid user. ";
        echo " <a href='reguser.html'>Register yourself here!</a>";

    } else {

        $row = mysqli_fetch_assoc($result);
        $hashedpass = $row['userpass'];

        //decrypt the password and verify the user
        if(password_verify($userpass, $hashedpass)) {
            
            //welcome user
            
            echo "<h1>Welcome $user</h1>";
        
        } else {

            //invalid password.

            echo "invalid password.";
            echo " <a href='index.html'>Try again!</a>";

        }
        
        
        
    }

}

?>