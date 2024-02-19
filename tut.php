



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="tut.php" method="post">
        
        <input type="text" name="student" /><br>
        
        <!-- <input type="text" name="num_1" /><br>
       
        <input type="text" name="num_2" /><br> -->

        <input type="submit" value="Submit" />
    </form>

<?php
    $grades = array("Turjo" =>"A+", "Rain"=> "B", "Tahmid"=>"B+", "Pulock"=>"C-");
    echo $grades[$_POST["student"]];
   


?>



</body>
</html>