<?php   
$ItemName = $_POST["ItemNo"];
$Price = $_POST["Price"];
$Quantity = $_POST["Quantity"];
$id = $_POST["id"];

$link = mysqli_connect("localhost", "root", "", "dbsample");

//check
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Query
$sql = "UPDATE tblinventory SET ItemName ='$ItemName', Price = '$Price', Quantity = '$Quantity' WHERE ItemNo ='$id'";
if(mysqli_query($link, $sql)){
    header("Location: Dashboard.php");
} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}
//Close connection
mysqli_close($link);
?>