<?php
$link = mysqli_connect("localhost", "root", "", "dbsample");

//Check connection
if ($link === false){
    die("ERROR: Could not conncet. " . mysqli_connect_error());
}

//Select query execution
$sql = "SELECT * FROM tbluser";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>UserId</th>";
        echo "<th>Username</th>";
        echo "<th>Full name</th>";
        echo "<th>Date Created</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            $id = $row['userid'];
            echo "<td>" . $row['userid'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['datecreated'] . "</td>";
            echo "<td> <a href = 'updateview.php?userid=$id'>Edit</a></td>";

            echo "</tr>";
        }
        echo "</table>";

        //result set
        mysqli_free_result($result);
    } else {
        echo "No Records were found.";
    } 
} else {
        echo "ERROR: Could not able to excute $sql. " . mysqli_error($link);
    }
    
    //close connection
    mysqli_close($link);
?>