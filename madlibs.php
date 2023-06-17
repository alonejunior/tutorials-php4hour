<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
</head>
<body>
    <form action="madlibs.php" method="get">
    Color: <input type="text" name="color">
    Plural Noun: <input type="text" name="pluralnoun">
    Celebrity: <input type="text" name="celebrity" >   
    <input type="submit">
    </form>
    <br><br>
<?php
            $color = $_GET["color"];
            $plrlnn = $_GET["pluralnoun"];
            $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo " $plrlnn are blue <br>";
    echo "I love $celebrity<br>";

?>

</body>
</html>