<?php
session_start(); //1
  $login = false;
  $showError = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../partials/dbconnect.php';
       
        $email = $_POST['email'];
        $pass = $_POST['password'];

       $sql2 = "Select * from cand"; //2
       $result2 = mysqli_query($conn, $sql2);
       $groupdata = mysqli_fetch_all($result2, MYSQLI_ASSOC); 
       $_SESSION["groupdata"] = $groupdata;
       
       $sql = "Select * from adminlogin where email='$email' AND pass='$pass' ";  
       $result = mysqli_query($conn , $sql);
       $num = mysqli_num_rows($result);
       if($num >= 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['email'] = $email;
           header("location: ../Dashboard/admindash.php");
       }
        
    else{
      $showError = "Invalid Credentials";
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
      </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Online Voting System</a>
        <form class="d-flex">
         
          <a href="../Registration/reg.php" class="navbar-brand" id= "login1">Register</a>
          <a href="../index.php" class="navbar-brand" id= "login1">Home</a>
        </form>
      </div>
    </nav>

    <?php
  if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Failed!</strong> Invalid Credentials
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  ?>


    <div class="container">
      <div class="top-header">
        <h3>Welcome back</h3>
        <p>Enter your credentials to access your account</p>
      </div>

      <form action="../login/adminlogin.php" method= "post">
        <div class="user">
          <i class="bx bxs-user-circle"></i>
          <input type="text" name = "email" placeholder="Enter your username" />
        </div>
        <div class="pass">
          <i class="bx bxs-lock-alt"></i>
          <input type="password" name = "password" placeholder="Enter your password" />
        </div>
        <div class="btn">
          <button type="submit">Sign in</button>
        </div>
      </div>
    </form>
    <p class="last">Forgot your password? <a href="#"> Reset Password </a></p>
    <script src="/app.js"></script>
  </body>
</html>