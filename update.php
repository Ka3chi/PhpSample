<?php   
$username = $_POST["un"];
$password = md5 ($_POST["pass"]);
$fullname = $_POST["fullname"];
$id = $_POST["id"];

$link = mysqli_connect("localhost", "root", "", "dbsample");

//check
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Query
$sql = "UPDATE tbluser SET username ='$username', password = '$password', fullname = '$fullname' WHERE userid ='$id'";
if(mysqli_query($link, $sql)){
    header("Location: view.php");
} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>