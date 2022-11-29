<html>
<head>
    <title></title>
</head>
<body>
<table border="6">
    <?php
    if (isset($_POST['submit'])) {
        $r = $_POST['row'];
        $c = $_POST['col'];
        $a = 1;
        $b = 1;
        while ($a <= $r) {
            echo "<tr>";
            while ($b <= $c) {
                echo "<td>";
                echo $a * $b;
                $b++;
                echo "</td>";
            }
            $a++;
            $b = 1;
            echo "</tr>";
        }
    }
    ?>
</table>
<form method="post">
    <label>rows:</label> <br/>
    <input type="number" name="row"/><br/>
    <label>columns:</label> <br/>
    <input type="number" name="col"/><br/>
    <input type="submit" name="submit" value="run"/>
</form>
</body>
</html>



