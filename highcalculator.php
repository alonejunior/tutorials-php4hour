<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>high Calculator</title>
</head>
<body>
            <form action="highcalculator.php" method="post">
                <input type="number" name="num1">
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                    <option value="%">%</option>

                </select>
                <input type="number" name="num2">
                <input type="submit">
            </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

       if($_POST["operation"] == "+")
       {
        $result =  $num1 + $num2;
       } 

       if($_POST["operation"] == "-")
       {
        $result =  $num1 - $num2;
       } 

       if($_POST["operation"] == "*")
       {
        $result =  $num1 * $num2;
       } 

       if($_POST["operation"] == "/")
       {
        $result =  $num1 / $num2;
       } 

       if($_POST["operation"] == "%")
       {
        $result =  $num1 % $num2;
       } 

       echo "Sonuç: " . $result;
    ?>

</body>
</html>