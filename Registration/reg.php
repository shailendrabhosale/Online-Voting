<?php
  $showAert = false;
  $showError = false;
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../partials/dbconnect.php';
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpassword = $_POST['cpass'];
        $exists = false;

        if(($pass == $cpassword) && $exists==false){
            
          $sql = "INSERT INTO `regdetails` (`firstname`, `lastname`, `gender`, `age`, `email`, `password`) VALUES ('$fname', '$lname', '$gender', '$age', '$email', '$pass')";
          
          $result = mysqli_query($conn , $sql);
          if($result){
              $showAert = true;
          }
        }
        else{
          $showError = "Passwords do not match";
        }
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="reg.css">
</head>
<body>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">E-Voting</a>
          <form class="d-flex">
            <a href="../login/login.php" class="navbar-brand" id= "login1">Login</a>
            <a href="../index.php" class="navbar-brand" id= "login1">Home</a>
          </form>
        </div>
      </nav>

  <?php
  if($showAert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Now you can Login
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Failed!</strong> Passwords do not match.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  ?>



    <div class="form">
    <form action="../Registration/reg.php" method = "post">
        
        <div class="mb-3">
         <div> <label for="exampleInputEmail1" class="form-label"><b>Name</b></label></div>
          <input type="text" name="firstname" id="name1" class="form-control , anurag" placeholder="First Name" required>
          <input type="text" name="lastname" id="name2" class="form-control , anurag" placeholder="Last Name" required>
        </div>


        <div class="mb-3">
          <select name="gender" id="option1" class="form-control , anurag" required>
            <option value="gender" >Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
          </select>

          <input type="number" name="age" id="age1" class="form-control , anurag" placeholder="age" required>

        </div>


        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><b>Email</b></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "name@example.com" name = "email" required>
          <div id="emailHelp" class="form-text" style="font-family: courier;">We'll never share your email with anyone else.</div>
        </div>


        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1"  required ><d style="font-family: courier">
            *Your password must be at least 8 character</d>
        </div>


        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"><b>Confirm Password</b></label>
          <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "cpass" required>
          <div id="emailHelp" class="form-text" ></div> 
        </div>


        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1" style="font-family: courier;">Agree terms and conditions</label>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
</body> 
</html>                                                                                                                 