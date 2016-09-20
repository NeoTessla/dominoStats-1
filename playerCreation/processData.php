<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "domino";
	$id = Rand(0, 99999999);
    $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $con = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($con, "INSERT INTO player (firstName, lastName, win, lost) VALUES )('$firstName','$lastName', 0, 0)");
    echo "Redirecting. . .";
?>
<!--This sends the browser back to the home page-->
<script>
    setTimeout(function() {
       window.location.href='/dominoStats/playerCreation/index.php';
    }, 1000);
</script>