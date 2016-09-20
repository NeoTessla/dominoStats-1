<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "domino";

	$id = Rand(0, 99999999);
	$wFirst = $_POST['wFirst'];
	$wLast = $_POST['wLast'];
	$lFirst = $_POST['lFirst'];
	$lLast = $_POST['lLast'];
    $date = $_POST['date'];
	$fDownLastName = $_POST['fDownLastName'];
	$wDrawtimes = $_POST['wDrawtimes'];
	$wBones = $_POST['wBones'];
	$wScore = $_POST['wScore'];
	$lDrawTimes = $_POST['lDrawTimes'];
	$lBones = $_POST['lBones'];
	$lScore = $_POST['lScore'];
	
    //converts $date into MYSQL format date, might have to do this for mobile
    

    $con = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($con, "INSERT INTO game ( wFirst, wLast, lLast, date, fDownLastName, wDrawtimes, wBones, lDrawTimes, lBones, lScore, wScore, lFirst) VALUES ( '$wFirst', '$wLast', '$lFirst', '$lLast', '$date', '$fDownLastName', '$wDrawtimes', '$wBones', '$wScore', '$lDrawTimes', '$lBones', '$lScore')");

    mysqli_query($con, "UPDATE player SET win = win + 1 WHERE lastName = '$wLast' AND firstName='$wFirst'");
    mysqli_query($con, "UPDATE player SET lost = lost +1 WHERE lastName = '$lLast' AND firstName='$lFirst'")

    //echo "Redirecting. . ." 
?>
<!--This sends the browser back to the home page-->
<script>
    setTimeout(function() {
       window.location.href='/dominoStats/index.php';
    }, 1000);
</script>