<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <center>
    <h1>Welcome Bonak</h1>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <th>Item No.</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Quantity</th>
    
    
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
?>
    <tr>
            <td><?php echo  $row['ItemNo'] ?></td>
            <td><?php echo  $row['ItemName'] ?></td>
            <td><?php echo  $row['Price'] ?></td>
            <td><?php echo  $row['Quantity'] ?></td><br>

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