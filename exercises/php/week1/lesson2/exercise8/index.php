<!DOCTYPE html>
<html>
<head>
	<title>Bảng số nguyên tố</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<table width="320px">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<tr";
            for ($j = 1; $j <= 10; $j++) {
                $count = 0;
                for ($k = 2; $k <= sqrt($i * 10 + $j); $k++) {
                    if (($i * 10 + $j) % $k == 0) {
                        $count++;
                    }
                }
                if ($i * 10 + $j < 2) {
                    echo "<td>" . ($i * 10 + $j) . "</td>";
                } else if ($count == 0) {
                    echo "<td class='bg-succes'>" . ($i * 10 + $j) . "</td>";
                } else {
                    echo "<td>" . ($i * 10 + $j) . "</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>