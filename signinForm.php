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
         form{
            background-color: #fff;
            max-width: 500px;
            margin: 90px auto 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 2px 5px 10px lightblue;
        }
        .formdiv{
            text-align: left;
            margin-bottom: 5px;
        }
        .formdiv label{
            font-size: large;
            display: flex;
            flex-wrap: wrap;
        }
        .formdiv input{
            border: 1px solid #777;
            border-radius: 20px;
            font-family: inherit;
            padding: 10px;
            margin-left: 0px;
            margin-right: auto;
            display: flex;
            width: 100%;
        }
        input[type=submit]{
            padding: 5px 9px;
            border-radius: 5px;
            background-color: beige;
        }
 
        ul>li>a{
        font-size: xx-large;
        color: rgb(24, 14, 14);
    }
    ul>li>a:hover{
        text-decoration: underline;
    }
    #navform{
    background-color: transparent;
    margin: 0px;
    padding: 0px;
    box-shadow: none;
    display: inline-flex;
}
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
    }nav{
        /*background-color: rgb(204, 166, 95);*/
        background-image: linear-gradient(45deg,black,orange);

    }
    .nav-item:hover{
        text-decoration: underline;
    }
    footer{
        text-align: left;
        height: 40px;
        background-color: rgb(31, 34, 35);
        color: rgb(231, 225, 225);
        margin-top: 208px;
        padding-right: 0px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top">
    <div class="container-fluid">
      <!--<a class="navbar-brand" href="#">
        <img src="assets/images/logo1.png" id="logo" alt="Logo">
      </a>-->
        <div class="navbar-nav">

        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-start" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="index.html">Home</a></li>
        <li class="nav-item dropdown"><a style="color: rgb(244, 236, 236);" class="nav-link active dropdown-toggle dropbtn" onclick="myFunction()" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Horoscope</a>
          <div class="dropdown-menu dropdown-content" id="myDropdown" style="background-color: rgb(223, 171, 87);" aria-labelledby="navbarDropdown">
            <span>
            <a class="dropdown-item" href="horoscope.html">ARIES</a>
            <a class="dropdown-item" href="taurus.html">TAURUS</a>
            <a class="dropdown-item" href="gemini.html">GEMINI</a>
            <a class="dropdown-item" href="cancer.html">CANCER</a>
        </span>
        <span>
            <a class="dropdown-item" href="leo.html">LEO</a>
            <a class="dropdown-item" href="virgo.html">VIRGO</a>
            <a class="dropdown-item" href="libra.html">LIBRA</a>
            <a class="dropdown-item" href="scorpio.html">SCORPIO</a>
        </span>
        <span>
            <a class="dropdown-item" href="sagi.html">SAGGITARIUS</a>
            <a class="dropdown-item" href="capricorn.html">CAPRICORN</a>
            <a class="dropdown-item" href="aquarius.html">AQUARIUS</a>
            <a class="dropdown-item" href="pisces.html">PISCES</a>
        </span>
          </div>
      </li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="almanac.html">Almanac</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="catalogue.html">Catalogue</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="AboutUs.html">About Us</a></li>
</ul>
<ul class="navbar-nav ms-auto">
  <form class="form-inline my-2 my-lg-0" id="navform">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" id="searchInput" aria-label="Search">
    <button class="btn my-2 my-sm-0" id="searchBtn"  type="submit"><a href="almanac.html"><img src="assets/images/search.png"></a></button>
  </form>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="signupForm.php"><img src="assets/images/signup.png">SignUp</a></li>
        <li class="nav-item"><a style="color: rgb(210, 53, 53);" class="nav-link active" href="signinForm.php"><img src="assets/images/signin.png">SignIn</a></li>   
      </ul>
    </div>
  </div>
</nav>

<form method="post" action="main2.php" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <h2>SignIn</h2>
<div class="formdiv">
        <label for="un">
            Username:<input type="text" id="un" name="uname" placeholder="username" required>
        </label>
        </div>
        <br>
        <div class="formdiv">
        <label for="un">
            Password:<input type="password" id="up" name="upass" placeholder="password" required>
        </label>
        </div>
        <br>
            <br><br>
            <input type="submit" name="submitform" value="Sign In"/>
</form>
<?php
        include('config.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = $_REQUEST['uname'];
            $password = $_REQUEST['upass'];
            $_SESSION['username']= $_REQUEST['uname'];
            $sql = "SELECT username, password FROM signup WHERE username='$username'";
            $result = $conn->query($sql);

    if (mysqli_num_rows($result) === 1) {
        $row = $result->fetch_assoc();
        if ($row['username'] === $username && $row['password'] === $password) {
            $sql1 = "INSERT INTO signin VALUES ('$username','$password')";
            
            $result=$conn->query($sql1);
           
           /* if (isset($_POST['submitform'])){
            echo "<script type='text/javascript'> window.location = 'main2.php'; </script>";
            }*/
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
            
        }

    ?>
<footer><p style="margin-left: 20px; padding-top: 5px;"><img src="assets/images/copy.png" style="height: 2rem; width: 2rem;">2023 All Rights Reserved</p></footer>
</body>
</html>