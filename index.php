<?php
$f_name = "Tafsir";
$l_namne = "Turjo";
$age = 29;
$higt = 6.3;
$can_vote = true;
$add = array(
    'City' => 'Dhaka',
    'Post office' => 'Jitgatola'
);
define('pi', 3.1416);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $friends = array("amit", "nishan", "dog", "tutun", "kire");
    $friends[3] = "Tutun";
    echo count($friends);

    ?>
    <form action="index.php" method="post">
        Password: <input type="password" name="password"><br>
        Apples :<input type="checkbox" name ="fruits[]" value ="apples"><br>
        Oranges :<input type="checkbox" name ="fruits[]" value ="apples"><br>
        Banana :<input type="checkbox" name ="fruits[]" value ="apples"><br>
        
        <input type="submit">
    </form>
    <br><br>
    <?php
    // echo $_POST["password"];
    $fruits = $_POST["fruits"];
    echo $_POST["fruits"];
    ?>
    <p>Name : <?php echo strtoupper("$f_name . '  ' . $l_name")  ?></p>
    <form action="index.php" method="get">
        <label>Your State : </label>
        <input type="text" name="state" /><br>
        <label>Number 1 : </label>
        <input type="text" name="num_1" /><br>
        <label>Number 2 : </label>
        <input type="text" name="num_2" /><br>
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_GET) && array_key_exists('state', $_GET)) {
        $state = $_GET['state'];
        if (isset($state) && !empty($state)) {
            echo strtoupper('<h1>You live in</h1> ' . $state . '<br>');
            echo strtoupper("$f_name <h1>lives in</h1> $state <br>");
        }
        if (count($_GET) >= 3) {
            $num_1 = $_GET['num_1'];
            $num_2 = $_GET['num_2'];
            echo strtoupper("$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>");
            echo "<hr>";
            echo strtoupper("$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>");
            echo "<hr>";
            echo strtoupper("$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>");
            echo "<hr>";
            echo strtoupper("$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>");
            echo "<hr>";
            echo strtoupper("$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>");
            echo "<hr>";
            echo strtoupper("$num_1 / $num_2 = " . intdiv($num_1 + $num_2, $divisor) . "<br>");
            echo "<hr>";
        }
    }

    ?>
</body>

</html>
