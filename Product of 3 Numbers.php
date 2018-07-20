<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />
    <input type="submit" />
</form>
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$arr = [$num1, $num2, $num3];
$counter = 0;
for ($i = 0; $i<=count($arr) - 1; $i++)
{
    if($arr[$i]<0)
    $counter++;
}
if($counter % 2 == 0)
{ echo 'Positive'; }
else { echo 'Negative'; }
?>

</body>
</html>/