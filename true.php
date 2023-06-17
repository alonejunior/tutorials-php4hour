<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="true.php" method="post">
  Apple:  <input type="checkbox" name="fruits[]" value="apple">    
  PineApple:  <input type="checkbox" name="fruits[]" value="pineapple">    
  Stawberry:  <input type="checkbox" name="fruits[]" value="stawberry">    
  Pear:  <input type="checkbox" name="fruits[]" value="pear">    

    <input type="submit">
</form>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>
</body>

</html>
