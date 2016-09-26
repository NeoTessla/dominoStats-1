<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        <link rel='stylesheet prefetch' href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <div class="container">
            <h1>Super Duper Domino Stats <small>Home</small></h1>
        </div>
    </head>
    
    <body>
        <div class="container">
            <h2>Latest games:</h2>
        </div>
                <body background="Domino1.jpg">
        
        <div class="container-fluid">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Winner Name</th>
                    <th>Winner Draw Times</th>
                    <th>Winner Bones</th>
                    <th>Winner Score</th>
                    <th>Loser Name</th>
                    <th>Loser Draw Times</th>
                    <th>Loser Bones</th>
                    <th>Loser Score</th>
                </tr>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "domino";
                    $con = mysqli_connect($servername, $username, $password, $dbname);
                    
                    $game = mysqli_query($con, "SELECT * FROM game");
                    while ($row = $game->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['wFirst'] . " " . $row['wLast'] . "</td>";
                        echo "<td>" . $row['wDrawtimes'] . "</td>";
                        echo "<td>" . $row['wBones'] . "</td>";
                        echo "<td>" . $row['wScore'] . "</td>";
                        echo "<td>" . $row['lFirst'] . " " . $row['lLast'] . "</td>";
                        echo "<td>" . $row['lDrawTimes'] . "</td>";
                        echo "<td>" . $row['lBones'] . "</td>";
                        echo "<td>" . $row['lScore'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
        <div style="text-align:center;">
            <p>Click <a href="playerCreation/index.php">here</a> view players</p>
            <p>Or click <a href="gameCreation/index.php">here</a> to enter a game.</p>
        </div>
        
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>