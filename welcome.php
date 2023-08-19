<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <style>
        li>a{
        font-size: x-large;
        color: aliceblue;
    }
    li>a:hover{
        text-decoration: underline;
    }
    /*body{
        background-image: url(assets/images/zudio.jpg);
        background-position: top;
        background-size: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }*/
    img{
        height: 20px;
        width: 20px;
        margin-right: 5px;
    }
    li{
      text-transform: capitalize;
      padding-left: 20px;
      padding-right: 20px;
      margin-left: 0px;
    }
    input[type=submit]{
            padding: 5px 9px;
            border-radius: 5px;
            background-color: beige;
            margin-left: 1200px;
        }
    footer{
        text-align: center;
        background-color: lightblue;
        margin-top: 665px;
    }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav">

        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Forgot Password</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
</ul>
<ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="signupForm.php"><img src="assets/images/signup.png">SignUp</a></li>
        <li class="nav-item"><a class="nav-link" href="signout.php"><img src="assets/images/signin.png">SignOut</a></li>   
      </ul>
    </div>
  </div>
</nav>
<?php
        include('project_conn.php');
        echo "<h1>Welcome"."  ".$_REQUEST['uname']."</h1>";
    ?>
    <form>
    <input type="submit" value="Change Password">
</form>

<footer>All Rights Reserved @copyright2023</footer>
</body>
</html>