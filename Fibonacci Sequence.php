<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num'])) {
    $n = intval($_GET['num']);

    function Fibonacci($n)
    {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return Fibonacci($n - 1) + Fibonacci($n - 2);
        }
    }
    for ($i=0;$i<$n;$i++)
    { echo Fibonacci($i),' '; }
}

?></body>
</html>