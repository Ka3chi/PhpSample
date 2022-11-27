<html>
<?php
    $link = mysqli_connect("localhost", "root", "", "dbsample");

    //Check connection
    if ($link === false){
        die("ERROR: Could not conncet. " . mysqli_connect_error());
    }
    //Select query execution
    $id = $_REQUEST["ItemNo"];
    $sql = "SELECT * FROM tblinventory WHERE ItemNo='$id'";
    if($result = mysqli_query($link, $sql)){
        $row = mysqli_fetch_array($result);
        $ItemName = $row["ItemName"];
        $Price = $row["Price"];
        $Quantity = $row["Quantity"];

} else {
    echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
}
//close connection
mysqli_close($link);
?>
    <form action="updateinventory.php" method="POST">
        <h1>Edit Inventory</h1><br>
        <input type="text" name="ItemNo" value="<?php echo $id ?>"><br>
        <input type="text" name="ItemName" value="<?php echo $ItemName ?>"><br>
        <input type="text" name="Price" value="<?php echo $Price ?>"><br>
        <input type="text" name="Quantity" value="<?php echo $Quantity ?>"><br>
        <input type="submit" name="submit" value="Update">
        <input type="reset" value="Clear">
        
    </form>
</html>