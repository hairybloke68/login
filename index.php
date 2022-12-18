<?php
    include('server.php');
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .container{
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        input {
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Registration System</h1>
        <form action="" method="post">
            <div class="error"> <?php echo $error; ?> </div>
            <input type="text" name="name" placeholder="User Name"><br><br>
            <input type="text" name="email" placeholder="email"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="password" name="repeatPassword" placeholder="Repeat Password"><br><br>
            <label for=checkbox>Keep me logged in</label>
            <input type="checkbox" name="StayLoggedIn" value="1"><br><br>
            <input type="submit" name="signUp" value="Sign Up"><br><br>
            
        </form>

    </div>
</body>  
</html>  
        
