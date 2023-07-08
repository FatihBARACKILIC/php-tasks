<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>

<body>

    <?php
    function triangle($lineCount)
    {
        for ($i = 0; $i <= $lineCount; $i++) {
            $k = 0;
            while ($k <= $i) {
                echo "0 ";
                $k++;
            }
            echo "<br />";
        }
    }

    triangle(15);
    echo "<hr />";
    triangle(5);
    echo "<hr />";
    triangle(10);
    ?>
</body>

</html>