<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body class="tbinventory">
    <center>
    <h1>Welcome User</h1>
    <table class="invent">
        <th><span>Item No.</span></th>
        <th><span>Item Name</span></th>
        <th><span>Price</span></th>
        <th><span>Quantity</span></th>
        <th><span>Action</span></th>
    
    
<!-- php starts here -->
<?php
$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

$sql = "SELECT * FROM tblinventory";
$result = mysqli_query($link, $sql);

if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $id = $row['ItemNo'] 
?>
    <tr>
            <td><?php echo  $row['ItemNo'] ?></td>
            <td><?php echo  $row['ItemName'] ?></td>
            <td><?php echo  $row['Price'] ?></td>
            <td><?php echo  $row['Quantity'] ?></td>
            <td><a href = 'updateinventview.php?ItemNo=$id'>Edit</a></td><br>
        </tr>
<?php
    }
}} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}
    //close connection
    mysqli_close($link);
?>
</table>
</center>
</body>
</html>