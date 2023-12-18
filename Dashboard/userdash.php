<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../login/login.php");
    }

    $userdata = $_SESSION['userdata'];
    $groupdata = $_SESSION['groupdata'];

    if ($_SESSION['userdata']['status'] == 0) {
        $status = '<b style = "color:red"> NOT VOTED </b>';
    }
    else {
        $status = '<b style = "color:green"> VOTED </b>';
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userdash.css">
    <title>Online Voting</title>
</head>
<body>
<div>
        <nav class="admin-nav">
            <ul>
                <li class="nav-brand"><h2 id="header1">OnlineVoting</h2></li>
                <li class="nav-logout"><a href="../Dashboard/logout.php" class="link-logout">Logout</a></li>
            </ul>
        </nav>
</div>
        <marquee direction="right" height="20" width="100%" bgcolor="red" id="movingtxt">WELCOME !!! Voting is your number 1 priority</marquee>
        <div id="mainsection">
            <div class="profile"><b>Name : </b> <?php echo $userdata['firstname'], " ",$userdata['lastname'] ?>
                <br><b> Age :</b> <?php echo $userdata['age']?>
                <br><b> Gender :</b> <?php echo $userdata['gender']?>
                <br><b> Email :</b> <?php echo $userdata['email']?>
                <br><b> Status :</b> <?php echo $status ?>
            </div>

            <div id="group">
                <?php
                    if ($_SESSION['groupdata']){
                        for($i=0; $i<count($groupdata); $i++) {
                            ?>
                            <div>
                                <img src="../Dashboard/uploads/<?php echo $groupdata[$i]['DPimage'] ?>" style="float : right" height="100" width = "100">
                                <b>Name: </b><?php echo $groupdata[$i]['Name'] ?><br>
                                <b>Party Name: </b><?php echo $groupdata[$i]['PartyName'] ?><br>
                                
                                <br>
                                <br>
                                
                                <form action="../Dashboard/vote.php" method="POST">
                                    <input type="hidden" name="gvotes" value = "<?php echo $groupdata[$i]['votes'] ?> ">
                                    <input type="hidden" name="gid" value = "<?php echo $groupdata[$i]['id'] ?> ">
                                   
                                    <?php
                                        if ($_SESSION['userdata']['status'] == 0) {
                                            ?>
                                    <input type="submit" name="votebtn" value = "Vote" id="votebtn">
                                    <?php
                                        }
                                        else {
                                            ?>
                                            <button disabled type="buttun"  name="votebtn" value = "Voted" id="voted">Voted</button>
                                            <?php
                                        }
                                        ?>
                                </form>
                                
                                <br>
                                <hr>
                            </div>
                            <?php
                        }
                    }
                    else {
                        echo ("something is wrong");
                    }
                ?>
            </div>
        </div>
</body>
</html>