<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
         form{
            background-color: #fff;
            max-width: 500px;
            margin: 80px auto;
            padding: 60px 20px;
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
            display: block;
            width: 100%;
        }
        input[type=submit]{
            padding: 5px 9px;
            border-radius: 5px;
            background-color: beige;
        }
        .formdiv select {
            width: 99%;
            padding: 10px;
}
#navform{
    background-color: transparent;
    margin: 0px;
    padding: 0px;
    box-shadow: none;
}
ul>li>a{
        font-size: xx-large;
        color: rgb(24, 14, 14);
    }
    ul>li>a:hover{
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
    nav{
        /*background-color: rgb(204, 166, 95);*/
        background-image: linear-gradient(45deg,black,orange);

    }
    .nav-item:hover{
        text-decoration: underline;
    }
    footer{
        text-align: center;
        background-color: lightblue;
        margin-top: 50px;
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
        <li class="nav-item"><a style="color: rgb(210, 53, 53);" class="nav-link active" href="signupForm.php"><img src="assets/images/signup.png">SignUp</a></li>
        <li class="nav-item"><a style="color: rgb(244, 236, 236);" class="nav-link active" href="signinForm.php"><img src="assets/images/signin.png">SignIn</a></li>   
      </ul>
    </div>
  </div>
</nav>

<form method="post" action="main2.php" action="<?php echo $_SERVER['PHP_SELF'];?>" data-aos="fade-down" data-aos-duration="1000">
    <h2>SignUp</h2>
<div class="formdiv">
        <label for="un">
            Username:<input type="text" id="un" name="uname" placeholder="username">
        </label>
        </div>
        <br>
        <div class="formdiv">
        <label for="un">
            Password:<input type="password" id="up" name="upass" placeholder="double click to show password" style="width: 92%;"><i class="bi-eye" style="border: none;margin-top: 0px; padding: 5px" id="togglePassword" onclick="showpass()"></i>
        </label>
        </div>
        <br>
            <div class="formdiv">
            <label for="np">
                Email:<input type="email" id="eid" name="em" placeholder="email id">
            </label>
            
            </div>
            <br>
            <div class="formdiv">
            <label for="np">
                Mobile NO.:<input type="text" id="mob" name="mno" placeholder="contact no">
            </label>
            
            </div>
            <br><br>
            <input type="submit" name="submitform" value="Register"><br><br>
            <p>If already a user then <a href="signinForm.php">Login</a></p>
</form>
<?php
        include('config.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_REQUEST['uname'];
        $password = $_REQUEST['upass'];
        $email = $_REQUEST['em'];
        $mob = $_REQUEST['mno'];
        $sum=0;
        $sum2=0;
        $abc=0;
        $query1 = "SELECT * from signup";
        $result = $conn->query($query1);
    // Insert user into the database
    /*$sql = "INSERT INTO signup ('username', 'password','email','mobile') VALUES ('$username', '$password','$email','$mob')";
    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully.";
        if (isset($_POST['submitform'])){
            echo "<script type='text/javascript'> window.location = 'main2.php'; </script>";
            }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error();
    }

    $conn->close();*/
      while($row = mysqli_fetch_assoc($result))
  {
      $sum =$sum+1;
  }

   {
       $sql = "INSERT into signup values('$username','$password','$email','$mob')";
       $result = $conn->query($sql);
       
   } 
   $query2 = "SELECT * from signup ";
   $result = mysqli_query($conn, $query2); 
   while($row = mysqli_fetch_assoc($result))
   {
       $sum2=$sum2+1;
   }
$abc=$sum;
   if($abc==$sum2)
   {
    echo "<center><b>Email id already exists</b></center>"; 
  }else{
    header("location: main2.php");
  }
  
  
    }
    ?>
    <script>
        function showpass(){
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#up');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
        });
    }
    </script>

<footer>All Rights Reserved @copyright2023</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>