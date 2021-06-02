<?php
    session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    }
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dataBase = "friendnote";

    $con = new mysqli($host, $user, $pass, $dataBase);

    $message = $_POST["mensajePOST"];
    $username = $_SESSION["username"];

    $sql = "INSERT INTO globalfeed(id, message, by_user) VALUES(NULL, '$message', '$username')";
    $query = mysqli_query($con, $sql);

    header( "location: main.php" );
?>

