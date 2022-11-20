<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" >
    <title>Document</title>
</head>
<body>
<center>
    <div class="inputform">
    <form method="post">            
        <input type="text" name="txtfirstname" placeholder="FirstName" ><br>
        <input type="text" name="txtlastname" placeholder="Lastname"><br>
        <input type="text" name="txtid" placeholder="Id's No."><br>
           
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Clear"><br>
        <p>Not Registered Yet?? <a href="">Sign up</a>
    </form>
    </center>
    </div>
    <!-- this is the php -->
    <?php
     if (isset($_POST['submit'])){
         $txtid = $_POST['txtid'];
         $txtlastname = $_POST['txtlastname'];
         $txtfirstname = $_POST['txtfirstname'];
        }
    
    ?>
    <center>
    <div class="output">
    <h2> The information </h2>
    <span><h3>Name:</h3><?php echo $txtfirstname; $txtlastname; ?></span>
    <span><h3>ID's No.:</h3><?php echo $txtid; ?></span>
    </center>
    </div> 
</body>
</html>