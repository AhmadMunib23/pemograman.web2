<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>modul 2 - latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="3"cellpadding="0">
        <tr>
            <th>kolom 1</th>
            <th>kolom 2</th>
            <th>kolom 3</th>
            <th>kolom 4</th>
            <th>kolom 5</th>
        </tr>
        <?php
        $rows = 15;
        $cols = 5;

        echo "<tr>";
        echo "</tr>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
            echo "<td>barisan $i, kolom $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    </table>
</body>
</html>