<?php
$data = array_map("str_getcsv", file("65HTTT_Danh_sach_diem_danh.csv"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
</head>
<body>

<h2>Danh sách sinh viên từ file CSV</h2>

<table border="1" cellspacing="0" cellpadding="5">
    <?php
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $column) {
            echo "<td>" . htmlspecialchars($column) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
