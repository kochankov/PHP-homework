<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<?php
$cols = 10;
$rows = 5;
for ($i=1; $i<=$rows; $i++)
{
    $red=51 * ($i - 1);
    $green=51 * ($i - 1);
    $blue=51 * ($i - 1);

    for ($j = 1; $j <= $cols; $j++)
    {
        if($j>1)
        {
            $red+=5;
            $green+=5;
            $blue+=5;
        }
        echo "<div style='background-color: rgb($red, $green, $blue);'></div>";
    }
    echo '<br>';
}
?></body>
</html>