<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
        .box {
            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            margin: 2px;
            border: 1px solid black;
        }
        .ganjil {
            background-color: #003;
            color: #fff;
        }
        .genap {
            background-color: #999;
        }
    </style>
</head>
<body>
    <?php
    // Number of rows
    $rows = 5;

    // Loop through each row
    for ($i = 1; $i <= $rows; $i++) {
        // Add the class for odd or even rows
        $class = ($i % 2 == 0) ? 'genap' : 'ganjil';

        // Print the row
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box $class'>$j</div>";
        }

        // Break after each row
        echo "<br>";
    }
    ?>
</body>
</html>