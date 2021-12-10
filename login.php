<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./css/signin.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class='container'>
      <div class='row'>
        <div class='col'>
          <main class="form-signin">
            <form method='POST' action='./functions/login_user.php' enctype="multipart/form-data" onsubmit="return validateForm(event);">
                <?php
                                if(isset($_SESSION["errors"])){
                                    $errors = $_SESSION["errors"];
                                    // loop through errors and display them
                                    foreach($errors as $error){
                                        ?>
                                            <small style="color: red"><?= $error."<br>"; ?></small>
                                        <?php
                                    }
                                }
                                // destroy session after displaying errors
                                $_SESSION["errors"] = null;
                            ?>
                    <h3>Login Here</h3>
                    <div >
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div>
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
                    </div>
                    <button class="btn btn-primary" name = 'login'>Log In</button>
                    <div >
                        <p>
                            <center>New User? <a href="signup.php">Sign Up</a></center>
                            <center><a href="forgotpassword.php">Forgot Password?</a></center>
                        </p>
                    </div>

            </form>
          </main>
        </div>
      </div>
    </div>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>