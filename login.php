

<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//include 'agmsdb/query.php';
if(!empty($_POST)){

    $confirmation = $q->confirm_login($_POST);
    // echo $confirmation;
    if($confirmation == 1){
        //setting data in cookie
        if(isset($_POST['rememberMe'])&& $_POST['rememberMe']=="on"){
        $email='email';
        $email_value=$_POST['email'];
        $pass='password';
        $pass_value=$_POST['password'];
        setcookie($email,$email_value,time()+(86400*30),"/");   //86400= 1day
        setcookie($pass,$pass_value,time()+(86400*30),"/");   //86400= 1day
                
        }
        //setting data in session

        session_start();
        $_SESSION['name'] = "hi";
        header("Location:index.php");
    }else{
        echo "Username or password invalid!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication"   style="background-color:white">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" value= "<?php 
                                                if(isset($_COOKIE['email']) &&  $_COOKIE['email']!=""){
                                                    echo $_COOKIE['email'];
                                                }

                                                ?>"  
                                                type="email" placeholder="name@example.com" />
                                                
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" value="<?php 
                                                if(isset($_COOKIE['password']) &&  $_COOKIE['password']!=""){
                                                    echo $_COOKIE['password'];
                                                }

                                                ?>"  
                                                type="password" placeholder="Password" />

                                                <label for="inputPassword">Password</label>
                                            </div>
                                             
                                            <div class="form-check mb-3">
                                                <!-- <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" /> -->
                                                <!-- <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div> -->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button class="btn btn-primary" type="register">Register</button>
                                                <button class="btn btn-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                   
                                <!-- </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
