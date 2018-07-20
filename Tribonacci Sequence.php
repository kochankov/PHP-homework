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

    function Tribonacci($n)
    {
        if ($n == 0 || $n == 1 || $n == 2) {
            return 1;
        } else {
            return Tribonacci($n - 1) + Tribonacci($n - 2) + Tribonacci($n - 3);
        }
    }
    for ($i=0;$i<$n;$i++)
    { echo Tribonacci($i),' '; }
}

?>
</body>
</html>