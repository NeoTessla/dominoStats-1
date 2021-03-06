<!DOCTYPE html>
<html>
    <head>
        <!--Links for font awesome, jquery UI, and bootstrap. also calls the index.css file in the css folder-->
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        <link rel='stylesheet prefetch' href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--^This makes the page mobile friendly. DIsables zooming with user-scalable=no-->
        <!--Datepicker stuff-->
        <link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
        <script type="text/javascript" src="js/jquery.plugin.js"></script> 
        <script type="text/javascript" src="js/jquery.datepick.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <!--Datepicker stuff done-->
        
        <meta charset="utf-8">
        <div id="dominoStatsHead" class="container">
            <h1><a href="/dominoStats/index.php">Super Duper Domino Stats</a> <small>Game Entry</small></h1>
        </div>
    </head>
    
    <body>
        <div class="container-fluid">
            <form class=""action="processData.php" method="post">
                <h2>Date and First Down</h2>
                <div class="form-group col-md-2">
                    <label for="date">Date</label>
                    <input type="text" class="form-control input-sm" name= "date" id="date" required>
                </div>
                <div class="form-group col-md-2">
                    <!--<label for="wFirstName">First Name</label>
                    <!--<input type="text" class="form-control input-sm" id="wFirstName" name="wFirst">-->
                    <label for="wLast">First Down Last Name</label>
                    <!--<input type="select" class="form-control input-sm" id="wLast" name="wLast">-->
                    <select name="fDownLastName" id="fDownLastName" class="form-control input-sm" required>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "domino";
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $players = mysqli_query($con, "SELECT lastName FROM player");
                        while ($row = $players->fetch_assoc()){
                            echo '<option value="' . $row['lastName'] . '">'.$row['lastName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <h2>Winner Stats</h2>
                <div class="form-group col-md-2">
                    <label for="wFirst">First Name</label>
                    <select name="wFirst" id="wFirst" class="form-control input-sm" required>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "domino";
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $players = mysqli_query($con, "SELECT firstName FROM player");
                        while ($row = $players->fetch_assoc()){
                            echo '<option value="' . $row['firstName'] . '">'.$row['firstName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="wLast">Last Name</label>
                    <!--<input type="select" class="form-control input-sm" id="wLast" name="wLast">-->
                    <select name="wLast" id="wLast" class="form-control input-sm" required>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "domino";
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $players = mysqli_query($con, "SELECT lastName FROM player");
                        while ($row = $players->fetch_assoc()){
                            echo '<option value="' . $row['lastName'] . '">'.$row['lastName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="wDrawtimes">Draw Times</label>
                    <input type="number" class="form-control input-sm num" id="wDrawtimes" name="wDrawtimes" min="0" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="wBones">Bones</label>
                    <input type="number" class="form-control input-sm num" id="wBones" name="wBones" min="0" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="wScore">Score</label>
                    <input type="number" class="form-control input-sm num" id="wScore" name="wScore" value="250" step="5" min="0" required>
                </div>
                <br>
                <br>
                <br>
                <h2>Loser Stats</h2>
                <div class="form-group col-md-2">
                    <label for="lFirst">First Name</label>
                    <select name="lFirst" id="lFirst" class="form-control input-sm" required>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "domino";
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $players = mysqli_query($con, "SELECT firstName FROM player");
                        while ($row = $players->fetch_assoc()){
                            echo '<option value="' . $row['firstName'] . '">'.$row['firstName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="lLast">Last Name</label>
                    <!--<input type="text" class="form-control input-sm" id="lLastName" name="lLast">-->
                    <select name="lLast" class="form-control input-sm">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "domino";
                        $con = mysqli_connect($servername, $username, $password, $dbname);
                        
                        $players = mysqli_query($con, "SELECT lastName FROM player");
                        while ($row = $players->fetch_assoc()){
                            echo '<option value="' . $row['lastName'] . '">'.$row['lastName'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="lDrawTimes">Draw Times</label>
                    <input type="Number" class="form-control input-sm num" id="lDrawTimes" name="lDrawTimes" min="0" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="lBones">Bones</label>
                    <input type="number" class="form-control input-sm num" id="lBones" name="lBones" min="0" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="lScore">Score</label>
                    <input type="number" class="form-control input-sm num" id="lScore" name="lScore" value="150" step="5" min="0" required>
                </div>
                <div class="col-md-10">
                    <button type="submit" class="btn btn-default pull-right">Submit</button>
                </div>
            </form>
        </div>
        
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
        <script src='js/index.js'></script>
    </body>
</html>