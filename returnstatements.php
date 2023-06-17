<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>
<body>
    
    <?php
        
       function cube($num)
       {
        echo "hello <br>"; 
        return $num * $num * $num;
        
       }

       
        echo cube(4);
    ?>


</body>
</html>