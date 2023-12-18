
<?php
session_start();

include ('../partials/dbconnect.php');

$votes = $_POST['gvotes'];
$total_votes = $votes + 1;
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['sr'];

$update_votes = mysqli_query($conn, "UPDATE cand SET votes='$total_votes' WHERE id='$gid' ");
$update_user_status = mysqli_query($conn, "UPDATE regdetails SET status=1 WHERE sr='$uid' ");


if($update_votes and $update_user_status){
    $sql2 = "Select * from cand"; 
    $result2 = mysqli_query($conn, $sql2);
    $groupdata = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    $_SESSION["userdata"]['status'] = 1; 
    $_SESSION["groupdata"] = $groupdata;
    echo '
        <script>
        alert("Successfully Voted!");
        window.location = "../Dashboard/userdash.php";
        </script>
        ';
        
}
else {
    echo '
    <script>
    alert("Some Error Occured!");
    window.location = "../Dashboard/userdash.php";
   </script>
    ';
}


?>