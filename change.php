<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form İşlemleri
    </title>
</head>
<body>
    

<form action="change.php" method="get">
    Name: <br>
    <input type="text" name="name" >
    <br>
    Age:
    <br>
    <input type="text" name="age">
    <br>
    Location:
    <br>
    <input type="text" name="gps" >
    <input type="submit">
</form>
You are name is 
<?php
    echo $_GET['name'];
?>
<br>
You are name age 
<?php
    echo $_GET['age'];
?>
<br>
You are Location is 
<?php
    echo $_GET['gps'];
?>
    
    
</body>
</html>