<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Bits</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

    <script src="https://kit.fontawesome.com/7276ac3ae5.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
        <div class="logo">
            <img src="logo.jpeg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Daily Bits
        </div>
        <form class="p-3 mt-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
        <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="fa-envelope" name="email" id="userName" placeholder="Username"  required class="form-control">
            </div>

            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password" required class="form-control" >
            </div>
            <input type="submit" name="login" value="Login" button class="btn mt-3" formaction="index.php"></button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forgot password?</a> or <a href="register.php">Sign up</a>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

        </div>
        <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

    </div>



<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
