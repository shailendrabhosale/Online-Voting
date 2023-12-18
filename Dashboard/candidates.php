<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
include '../partials/dbconnect.php';

$name = $_POST['name'];
$Partyname = $_POST['partyname'];
$role = $_POST['post'];
$image = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "../Dashboard/uploads/$image");
$sql = "INSERT INTO `cand` (`Name`, `PartyName`, `DPimage`, `Post`) VALUES ('$name', '$Partyname', '$image', '$role')";
$result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="candidates.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Candidate</title>
</head>
<body>
    <div>
        <nav class="admin-nav">
            <ul>
                <li class="nav-brand"><h2 id="header1">E-Voting</h2></li>
                <li class="nav-logout"><a href="admindash.php" class="link-logout">Back</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <h1 class="headline">ADD NEW CANDIDATE</h1>
    </div>

    <div class="form-div">
        <form action="candidates.php" method= "POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name = "name">
              <small id="emailHelp" class="form-text text-muted">.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Party name</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Party" name="partyname">
            </div>
            
                    <div>
                        <label for="img">Select image:</label>
                        <input type="file" name="img" class="form-control">
                    </div>

                    <div class="form-group">
                        <br>
                        <label for="img">Position</label>
                        <input type="text" placeholder="Enter Position" name="post" class="form-control">
                    </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
              <label class="form-check-label" for="exampleCheck1">Confirm Adding Candidate</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>