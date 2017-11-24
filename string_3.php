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
        echo strstr($message, "nice");
        echo "<br>";
        echo strpos($message, "e");
        echo "<br>";
        echo strchr($message, 'i');
        echo "</h1>";

    ?>
</body>
</html>