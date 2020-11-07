<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/app/css/login.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APP</title>
</head>

<body>
<div class="container login-container">
    <div class="row align-items-center justify-content-center">
        <div class="col-5 login-form-1">
            <h3>Login</h3>
            <form action = "" method = "post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" value="" name = "email"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" value="" name = "password"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login"/>
                </div>
            </form>
        </div>
    </div>
</div>  
</body>
</html>
<?php
    if(isset($_POST['email']) && isset($_POST['password'])) {
        if (match_found_in_database($_POST['email'], $_POST['password'])) {
            $_SESSION['loggedin'] = true;
            // $_SESSION['username'] = $username; $username coming from the database
            // something like this is optional, of course
            header("Location: /app");
        } else {
            //print an error messsage in the login page
        }
    }

    function match_found_in_database($mail, $pass) {
        //Normally we'll verify if the user exists and the pass is correct then we'll return true else return false;
        return true;
    }
?>