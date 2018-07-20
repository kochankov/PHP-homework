<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        table * {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>

    <?php
    $cols = 3;
    $rows = 5;
    $red=0;
    $green=0;
    $blue=0;
    $r=0;
    $g=0;
    $b=0;

    for ($i=1; $i<=$rows; $i++)
    {
        echo '<tr>';
        for ($j=1; $j<=$cols; $j++)
        {
            if ($j==1)
            {
                $red+=51;
                echo "<td style='background-color:rgb($red, 0, 0);'></td>";
            }
            elseif ($j==2)
            {
                $green+=51;
                echo "<td style='background-color:rgb(0, $green, 0);'></td>";
            }
            else
            {
                $blue+=51;
                echo "<td style='background-color:rgb(0, 0, $blue);'></td>";
            }
        }
        echo '</tr>';
    }

    ?>
</table>
</body>
</html>