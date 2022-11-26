<?php
$username = $_POST["un"];
$fullname = $_POST["fullname"];
$password = $_POST["pass"];

$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

//Query
$sql = "INSERT INTO tbluser SET username='$username', password='$password', fullname='$fullname'";

if (mysqli_query($link, $sql)){
    header("Location: view.php");
} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}

//Close connection
mysqli_close($link);
?>