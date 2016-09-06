<!DOCTYPE html>
<html>
    <head>
        <!--Links for font awesome, jquery UI, and bootstrap. also calls the index.css file in the css folder-->
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--^This makes the page mobile friendly. DIsables zooming with user-scalable=no-->
        
        <meta charset="utf-8">
        <div id="dominoStatsHead" class="container">
            <h1>Super Duper Domino Stats - Game Entry</h1>
        </div>
    </head>
    
    <body>
        <div class="container-fluid">
            <h2>Date and First Down</h2>
            <form class=""action="processData.php" method="post">
                <div class="form-group col-xs-2">
                    <label for="date">Date</label>
                    <input type="text" class="form-control input-sm" name= "date" id="date" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group col-xs-2"> <!--Might have to move this div-->
                    <label for="fDownLastName">First Down Last Name</label>
                    <input type="text" class="form-control input-sm" id="fDownLastName" name="fDownLastName">
                </div>
                <br>
                <br>
                <br>
                <h2>Winner Stats</h2>
                <div class="form-group col-xs-2">
                    <label for="wFirstName">First Name</label>
                    <input type="text" class="form-control input-sm" id="wFirstName" name="wFirst">
                </div>
                <div class="form-group col-xs-2">
                    <label for="wLast">Last Name</label>
                    <input type="text" class="form-control input-sm" id="wLast" name="wLast">
                </div>
                <div class="form-group col-xs-2">
                    <label for="wDrawTimes">Draw Times</label>
                    <input type="Number" class="form-control input-sm" id="wDrawTimes" name="wDrawTimes">
                </div>
                <div class="form-group col-xs-2">
                    <label for="wBones">Bones</label>
                    <input type="number" class="form-control input-sm" id="wBones" name="wBones">
                </div>
                <div class="form-group col-xs-2">
                    <label for="wScore">Score</label>
                    <input type="number" class="form-control input-sm" id="wScore" name="wScore">
                </div>
                <br>
                <br>
                <br>
                <h2>Loser Stats</h2>
                <div class="form-group col-xs-2">
                    <label for="lFirstName">First Name</label>
                    <input type="text" class="form-control input-sm" id="lFirstName" name="lFirst">
                </div>
                <div class="form-group col-xs-2">
                    <label for="lLastName">Last Name</label>
                    <input type="text" class="form-control input-sm" id="lLastName" name="lLast">
                </div>
                <div class="form-group col-xs-2">
                    <label for="lDrawTimes">Draw Times</label>
                    <input type="Number" class="form-control input-sm" id="lDrawTimes" name="lDrawTimes">
                </div>
                <div class="form-group col-xs-2">
                    <label for="lBones">Bones</label>
                    <input type="number" class="form-control input-sm"id="lBones" name="lBones">
                </div>
                <div class="form-group col-xs-2">
                    <label for="lScore">Score</label>
                    <input type="number" class="form-control input-sm" id="lScore" name="lScore">
                </div>
                <br>
                <br>
                <br>
                <br>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div style="text-align:center;">
            <p> Or click <a href="playerCreation/index.php">here</a> to make a new player</p>  
        </div>
        
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
        <script src='js/index.js'></script>
    </body>
</html>
