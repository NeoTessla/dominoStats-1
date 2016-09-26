<!DOCTYPE html>
<html>
    <head>
        <title>Domino Tracker</title>
        <!--Links for font awesome, jquery UI, and bootstrap. also calls the index.css file in the css folder-->
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/index.css">
        
        <meta charset="utf-8">
        <div id="dominoStatsHead" class="container">
            <h1><a href="/dominoStats/index.php" class="">Super Duper Domino Stats</a> <small>Players</small></h1>
        </div>
    </head>
    

  <body background="Domino.jpg">
 
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "domino";
        $con = mysqli_connect($servername, $username, $password, $dbname);
        $playerTable = mysqli_query($con, "SELECT * FROM player");
        $gameTable = mysqli_query($con, "SELECT * FROM game");
        $playersArr = array();
        
        while ($r = mysqli_fetch_assoc($playerTable)) { //this puts player firstName and lastName in order.
            array_push($playersArr, $r['firstName']);
            array_push($playersArr, $r['lastName']);
        }
        
        $playerInc = 0;
        $playerTable = mysqli_query($con, "SELECT * FROM player");
        echo "<div class='container-fluid'>";
        echo "<div class='row'>";
        while ($row = mysqli_fetch_assoc($playerTable)) {
            $totalGames = $row['win'] + $row['lost'];
            
            echo "<div class='container bord col-md-3' id=player" . $playerInc . ">";
            //echo "<span style='position:absolute;width:100%;height:100%;top:0;left: 0;z-index: 1;'></span>"; for future div clicking?
            echo "<strong>" . $row['firstName'] . " " . $row['lastName'] . "</strong>";
            echo "<br>";
            echo " <strong>W/L: </strong>" . $row['win'] . "/" . $row['lost'];
            echo "<br>";
            echo "<strong>Total Games: </strong>" . $totalGames;
            echo "</div>";
            
            $playerInc += 1;
        }
        echo "</div>";
        echo "</div>";
        
        // loops through game table, looking for drawTimes if wFirst and wLast = $playersArr[a, then a+1]. does the same for loser field. 
        //Basically, goes through the table and looks for a specific player's stats in a certain field (in this case, DrawTimes).
        $drawTimesTotal = 0;
        $drawGamesInc = 1;
        $drawTimesAvg = array();
        for($a=0; $a < count($playersArr); $a+=2) {
            while($b = mysqli_fetch_assoc($gameTable)) {
                if($b['wFirst'] === $playersArr[$a] && $b['wLast'] === $playersArr[$a+1]) {
                    $drawTimesTotal += $b['wDrawtimes'];
                    $drawGamesInc += 1;
                }
                if($b['lFirst'] === $playersArr[$a] && $b['lLast'] === $playersArr[$a+1]) {
                    $drawTimesTotal += $b['lDrawTimes'];
                    $drawGamesInc += 1;
                }
            }
            array_push($drawTimesAvg, $drawTimesTotal/$drawGamesInc);
            //resets stuff. without this, the $gameTable sql query doesn't work for whatever reason.
            $gameTable = mysqli_query($con, "SELECT * FROM game");
            $drawTimesTotal = 0;
            $drawGamesInc = 0;
        }
        
        $inc = 0;
        foreach($drawTimesAvg as $avg) {
            echo "<p id=avg" . $inc . ">" . $avg . "</p>";
            $inc += 1;
        }
        echo "<p id='totAvg'>" . $inc . "</p>";
        ?>
        <a href="playerCreation.html"><button class="btn btn-link">Click here to create a player.</button></a>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src='js/index.js'></script>
    </body>
</html>