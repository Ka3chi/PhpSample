<html>
<?php
$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

//Select query execution
$id = $_REQUEST["userid"];
$sql = "SELECT * FROM tbluser WHERE userid='$id'";
if($result = mysqli_query($link, $sql)){
    $row = mysqli_fetch_array($result);
    $username = $row["username"];
    $password = $row["password"];
    $fullname  = $row["fullname"];

} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}

//close connection
mysqli_close($link);
?>

<form action ="update.php" method = "POST">
    <h1>Sign Up</h1><br>
    <input type="text" name="id" value="<?php echo $id ?>"><br>
    <input type="text" name="un" value="<?php echo $username ?>"><br>
    <input type="text" name="fullname" value="<?php echo $fullname ?>"><br>
    <input type="password" name="pass" value="<?php echo $password ?>"><br>
    <input type="submit" name="submit" value="Update">
    <input type="reset" value="Clear">
</form>
</html>