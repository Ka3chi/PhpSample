<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" >
    <title>Log In</title>
</head>
<body class="cover">
<center>
    <div class="inputform">
    <form method="post">            
        <input type="text" name="un" placeholder="Username" required><br>
        <input type="text" name="pass" placeholder="Password" required><br>
           
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Clear"><br>
        <p>Not Registered Yet?? <a href="SignUp.html">Sign up</a>
    </form>
    </center>
    </div>
</body>

<?php 
if (isset($_POST['submit'])){
    $username = $_POST['un'];
    $password = $_POST['pass'];
}

$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

//Query
error_reporting(E_ALL ^ E_WARNING);
$sql = "SELECT * FROM tbluser WHERE username='$username'";

$result = mysqli_query($link, $sql);

//error traping
if (mysqli_num_rows($result)==1){
    $sql = "SELECT * FROM tbluser WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result)==1){
        header("Location: Dashboard.php");
    } else {
        echo "Wrong Password";
    }
} else{
    echo "Wrong Username";
}

//Close connection
mysqli_close($link);


// if ($username == "aldrin"){
//     echo "Log in Success";
// } elseif($password == "123"){
//     echo "Log in Success";
// }
// else {
//     echo "Wrong Username & Password";
// }
?>
</html>