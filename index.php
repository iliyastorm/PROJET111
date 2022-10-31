<html>
<head>

    <title></title>
</head>
<body>

<table border="6">

    <?php
    $a = 1;
    $b = 1;
    $n = 5;
    while ($a <= $n) {
        echo "<tr>";
        while ($b <= $n) {
            echo "<td>";
            echo $a * $b;
            $b++;
            echo "</td>";
        }
        $a++;

        $b = 1;

        echo "</tr>";
    }
    ?>

</table>
</body>
</html>



