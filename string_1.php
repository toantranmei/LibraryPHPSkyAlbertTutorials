<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kiến thức phần string</title>
</head>
<body>
    <?php
        $one = "Good morning!";
        $two = "How are you?";
        $three = $one;

        echo $three;
        echo "<br>";
        $three .= $two;
        echo "{$three} <br>";
        echo strtoupper($three);
        echo "<br>";
        echo strtolower($three);
        echo "<br>";
        echo ucwords($three);
        echo "<br>";
        echo $three;

    ?>
</body>
</html>