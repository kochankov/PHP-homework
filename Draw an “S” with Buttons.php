<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
$n1 = 5;
$n2 = 9;
$caption=-1;
$cwqt = 'XX';

for ($i=1; $i<=$n2; $i++)
{
    for ($j=1; $j<=$n1; $j++)
    {
        if ($i == 1 || $i == 5 || $i == 9 || ($j == 1 && $i <= 5) || ($j == 5 && $i >= 5)) {
            $caption = 1;
            $cwqt = "blue";
        } else {
            $caption = 0;
            $cwqt = "transparent";
        }
        echo '<button style="background-color:'.$cwqt.';">'.$caption.'</button>';
    }
    echo "<br>";
}
?></body>
</html>