<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>


      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("config.php");
              if(isset($_POST['submit']) && $_POST["submit"] == "login"){
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM registered_users WHERE `email`='$email' AND `password`='$password' ") or die("Error Occurred");
                $row = mysqli_fetch_assoc($result);
                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    header("Location: index.php");

                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='login_form.php'><button class='btn'> Go Back </button>";
         
                }
                // if(isset($_SESSION['valid'])){
                //     header("Location: index.php");
                // }
              }else{

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>