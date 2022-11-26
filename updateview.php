<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

//Select query execution
$id = $_REQUEST["userid"];
$sql = "SELECT * FROM tbluser WHERE userid=$id";
if($result = mysqli_query($link, $sql)){
    $row = mysqli_fetch_array($result);
    $username = $row("username");
    $password = $row("password");
    $fullname  = $row("fullname");

} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}

//close connection
mysqli_close($link);
?>
<body>
    <div>
        <form action="updaterecord.php" method ="POST">
            <h1>Sign Up</h1><br>
            <input type="text" name="id" value="<?php echod $id ?>"><br>
            <input type="text" name="un" value="<?php echod $username ?>"><br>
            <input type="text" name="fullname" value="<?php echod $fullname ?>"><br>
            <input type="password" name="pass" value="<?php echod $password ?>"><br>
            <input type="submit" name="submit" value="Update">
            <input type="reset" value="Clear">

        </form>
    </div>
</body>
</html>