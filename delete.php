<?php

$db = mysqli_connect("localhost","root","","friendnote");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"DELETE from globalfeed where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:account.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>