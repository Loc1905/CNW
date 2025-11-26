<?php include 'flower.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản trị danh sách hoa</title>
</head>
<body>
    <h2>Bảng quản trị hoa</h2>
    <table border="1" width="100%">
        <tr>
            <th>Tên hoa</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
            <th>Hành động</th>
        </tr>

        <?php foreach ($flowers as $flower): ?>
        <tr>
            <td><?= $flower['name'] ?></td>
            <td><?= $flower['description'] ?></td>
            <td><img src="image/<?= $flower['image'] ?>" width="100"></td>
            <td>
                <button>Sửa</button>
                <button>Xóa</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
