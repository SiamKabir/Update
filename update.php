<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $city = $_POST['City'];
    $dept = $_POST['dept'];
    $cgp = $_POST['cg'];

    $host = 'localhost';
    $user ='root';
    $pass = '';
    $dbname ='student';

    $connect = mysqli_connect($host, $user, $pass,$dbname);

    $sql = "UPDATE `info` SET `ROLL`='".$id."',`NAME`='".$name."',`CITY`='".$city."',`DEPARTMENT`='".$dept."',`CGPA`= $cgp WHERE `ROLL` = $id";

    $result = mysqli_query($connect, $sql);
   
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <style>
    </style>

<div class="main">
<form action="#" method ="POST" >
     <table>
     <tr>
            <td>Roll:</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="Name"></td>
        </tr>

        <tr>
            <td>City:</td>
            <td><input type="text" name="City"></td>
        </tr>
        <tr>
            <td>Department:</td>
            <td><input type="text" name="dept"></td>
        </tr>
        <tr>
            <td>CG:</td>
            <td><input type="number" name="cg"></td>
        </tr>
        
        <tr>
            <td><input type="submit" value="Update" name="submit"></td>
        </tr>
     </table>
</form>
</div>
    
</body>
</html>
