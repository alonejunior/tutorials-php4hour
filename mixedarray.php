<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Form action="mixedarray.php" method="post">
        Student name: <br>
     <input type="text" name="studentname">
     <input type="submit">
     <br>
    </Form>
    Aldığı not:
        <?php
        
               $grades = array("jim" => "A+" , "Pam" => "B-" , "Oscar" =>  "C+"); 
               echo $grades[$_POST["studentname"]];
       ?>

</body>

</html>