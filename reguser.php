<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "login";

$con = mysqli_connect($servername, $username, $password, $db);

if (isset($_POST["submit"])) {

// Form validation

$errors = array();

    if (empty($_POST["username"])) {

        $errors[] = "Please enter your username.";
    
    }

    if (empty($_POST["userpass"])) {
    
        $errors[] = "Please enter a valid username.";
    
    }

    if (empty($_POST["displayname"])) {

        $errors[] = "Please enter a valid Display Name.";
    
    }

    if (empty($_POST["useremail"])) {

        $errors[] = "Please enter a valid email.";

    }

    if (empty($errors)) {

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

    } else {

        // Display error to the user.
        echo "Form errors:";

        foreach ($errors as $error) {
            echo "<br>- " . $error;
        }
        
    }

    
    
    
    

  
}
?>