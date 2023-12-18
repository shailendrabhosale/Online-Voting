<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admindash.css">
</head>
<body>
    
    <div>
        <nav class="admin-nav">
            <ul>
                <li class="nav-brand"><h2 id="header1">E-Voting</h2></li>
                <li class="nav-logout"><a href="../Dashboard/logout.php" class="link-logout">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#"><img src="../Dashboard/img/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" id="nav-img" alt=""></a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>
    <div>
      
      <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="../Dashboard/img/icons8-arrow.gif" alt="" id="animg"></span>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      </script>
      
    </div>
    
    <div class="card" id="card1">
      <img src="https://www.kindpng.com/picc/m/495-4952535_create-digital-profile-icon-blue-user-profile-icon.png" alt="Avatar" style="width:100%" id="cardimg">
      <div class="container">
        <h4 id="card-post"><b>ADD CANDIDATES</b></h4> 
        <form action="../Dashboard/candidates.php" method="get">
          <p><button class="card-btn">ADD</button></p> 
        </form>  
      </div>
    </div>
  
    <div class="card" id="card2">
      <!-- <img src="www.freeiconspng.com/uploads/results-icon-png-10.png" width="350" alt="Download Results Icon" style="width:100%" id="cardimg"> -->
      <a href="#" title="Image from freeiconspng.com"><img src="https://www.freeiconspng.com/uploads/results-icon-png-10.png" width="309" alt="Download Results Icon" /></a>
      <div class="container">
        <h4 id="card-post"><b>CHECK RESULTS</b></h4>
        <form action="../Dashboard/results.php" method="get">
          <p><button class="card-btn">Check Results</button></p> 
        </form>
      </div>
    </div>
     
</body>
</html>