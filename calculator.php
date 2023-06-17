<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="calculator.php" method="get">
            <input type="number" name="num1">
            <select name="operation" style=" width: 30px; border-radius: 10px;">
                <option value="+" style="background-color: antiquewhite;">+</option>
                <option value="*">*</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="num2">
            <input type="submit">
        </form>

        <?php
            if(isset($_GET["num1"]) && isset($_GET["num2"]))
            {
                $num1 = (float) $_GET["num1"];
                $num2 = (float) $_GET["num2"];
                
                if($_GET["operation"] == "+")
                {
                   $result = $num1 + $num2;
                }
                if($_GET["operation"] == "-")
                {
                   $result = $num1 - $num2;
                }
                if($_GET["operation"] == "*")
                {
                   $result = $num1 * $num2;
                }
                if($_GET["operation"] == "/")
                {
                   $result = $num1 / $num2;
                }
                if($_GET["operation"] == "%")
                {
                   $result = $num1 % $num2;
                }

                echo "Sonuç:" . $result;
            }
        ?>
   
</body>
</html>