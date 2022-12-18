<?php 
session_start();
$error = "";

if (array_key_exists('signUp', $_POST)) {
    include('linkDB.php');
    //taking data from user
    $name = mysqli_real_escape_string($linkDB, $_POST['name']);
    $email = mysqli_real_escape_string($linkDB, $_POST['email']);
    $password = mysqli_real_escape_string($linkDB, $_POST['password']);
    $repeatPassword = mysqli_real_escape_string($linkDB, $_POST['repeatPassword']);

   //data filters

   if (!$name) {
    $error .= "Name is required<br>";
   }
   if (!$email) {
    $error .= "Email is required<br>";
   }
   if (!$password) {
    $error .= "Password field is empty<br>";
   }
   if ($password !== $repeatPassword) {
    $error .= "Password did not match<br>";
   }
   if ($error) {
    $error = "<b>There was a problem<b><br>".$error;
   } else {
    //check if email already exists
    $query = "SELECT id FROM users WHERE email = '$email' ";
    $result = mysqli_query($linkDB, $query);
    if (mysqli_num_rows($result) > 0) {
        $error = "There is already an account at this email address<br>";
    } else {
        //Password Encryption
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
        $result = mysqli_query($linkDB, $query);
        if (!$result) {
            $error = "You are not Registered.  Try again Later <br>";
        } else {
            $_SESSION['id'] = msqli_insert_id($linkDB);
            $_SESSION['name'] = $name;
            echo "You are now a member<br>";
        }
    }
   }
}

?>
