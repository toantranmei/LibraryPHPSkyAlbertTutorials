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
        $so = 15.4379;
        $sohai = 15.898798797;
        echo round($so); echo "<br>";
        echo ceil($so); echo "<br>";
        echo floor($sohai); echo "<br>";
        echo is_int($so); echo "<br>";
        echo is_float($so); echo "<br>";
        echo is_numeric($so); echo "<br>";
    ?>
</body>
</html>