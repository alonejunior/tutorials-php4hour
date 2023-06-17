<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    
    class Student {
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major , $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;

        }

        function hasHonors(){
            if($this->gpa >= 3.5){
                return "You are entitled to receive a certificate of honor";
            }
            return "You will not receive the document!";
        }
    }
       
    $student1 = new Student("Jim","Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);
   
    echo $student2->hasHonors();
?>

</body>
</html>