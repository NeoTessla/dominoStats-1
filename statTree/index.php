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
            <h1><a href="/dominoStats/index.php">Super Duper Domino Stats</a> <small>StatTree</small></h1>
        </div>
    </head>
    
    <body>
        <div class="container" id="tree">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "domino";
            $con = mysqli_connect($servername, $username, $password, $dbname);
            $playerTable = mysqli_query($con, "SELECT * FROM player");
            $gameTable = mysqli_query($con, "SELECT * FROM game");
            $playerInc = 0;
            $playersArr = array();
            
            while ($r = mysqli_fetch_assoc($playerTable)) { //this puts player firstName and lastName in order.
                array_push($playersArr, $r['firstName']);
                array_push($playersArr, $r['lastName']);
            }
            
            $playerTable = mysqli_query($con, "SELECT * FROM player");
            //prints names
            while ($row = mysqli_fetch_assoc($playerTable)) {
                echo "<div class='bord col-md-3' id=player" . $playerInc . ">";
                //echo "<span style='position:absolute;width:100%;height:100%;top:0;left: 0;z-index: 1;'></span>"; for future div clicking?
                echo "<strong>" . $row['firstName'] . " " . $row['lastName'] . "</strong>";
                $playerInc++;
                echo "</div>";
            }
            
            // loops through game table, looking for drawTimes if wFirst and wLast = $playersArr[a, then a+1]. does the same for loser field. 
            //Basically, goes through the table and looks for a specific player's stats in a certain field (in this case, DrawTimes).
            $drawTimesTotal = 0;
            $drawGamesInc = 0;
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
        </div>
        
        <div id="tree">
        </div>
        
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>