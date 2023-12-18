<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Dashboard/results.css">
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Results</title>
</head>
<body>
    <div>
        <nav class="admin-nav">
            <ul>
                <li class="nav-brand"><h2 id="header1">E-Voting</h2></li>
                <li class="nav-logout"><a href="../Dashboard/admindash.php" class="link-logout">Back</a></li>
            </ul>
        </nav>
    </div>

    <!-- Existing code for displaying candidate results -->
    <?php
    session_start();
    $groupdata = $_SESSION['groupdata'];

    for($i = 0; $i < count($groupdata); $i++) {
        ?>
        <div>
            <img src="../Dashboard/uploads/<?php echo $groupdata[$i]['DPimage'] ?>" style="float: right" height="100" width="100">
            <b>Name: </b><?php echo $groupdata[$i]['Name'] ?><br>
            <b>Party Name: </b><?php echo $groupdata[$i]['PartyName'] ?><br>
            <b>Votes: </b><?php echo $groupdata[$i]['votes'] ?>
            <br>
            <br>
            <br>
            <hr>
        </div>
        <?php
    }
    ?>

    <!-- New smaller pie chart for vote count -->
    <div style="width: 300px; height: 200px;">
        <canvas id="voteChart"></canvas>
    </div>

    <?php
    // Prepare data for the new pie chart
    $labels = [];
    $votes = [];
    for($i = 0; $i < count($groupdata); $i++) {
        $labels[] = $groupdata[$i]['Name'];
        $votes[] = $groupdata[$i]['votes'];
    }
    ?>

    <script>
        // Access PHP variables in JavaScript
        var labels = <?php echo json_encode($labels); ?>;
        var votes = <?php echo json_encode($votes); ?>;

        // Create the new pie chart
        var ctx = document.getElementById('voteChart').getContext('2d');
        var voteChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Vote Count',
                    data: votes,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                        // Add more colors if needed
                    ],
                    borderColor: 'rgba(255, 255, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false
            }
        });
    </script>
</body>
</html>
