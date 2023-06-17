<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array.php" method="post">
     KaçıncıAdam :
     <input type="number" name="isim" >
     <input type="submit"> 
     <br>
    </body>
</html>
<?php


$friends = array("Arif", "kemal","nazım", "hikmet");
echo $friends[$_POST["isim"]];
//count işlemlerin sayısını yazar



?>