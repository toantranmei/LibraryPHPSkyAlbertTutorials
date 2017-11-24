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
        $message = "Have a nice day!";
        
        echo "<h1>";
        echo $message;
        echo "<br>";
        echo "Co do dai la: " . strlen($message);
        echo "<br>";
        echo str_replace("nice", "great", $message);
        echo "<br>";
        echo str_repeat($message, 3);
        echo "<br>";
        echo substr($message, 5, 16);
        echo "</h1>";

    ?>
</body>
</html>