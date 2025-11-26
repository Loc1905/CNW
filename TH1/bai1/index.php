<?php include 'flower.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Danh sách hoa</title>
</head>
<body>
    <h2>Các loài hoa</h2>
    <div class="container">
        <?php foreach ($flowers as $flower): ?>
            <div class="card">
                <img src="image/<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
                <h3><?= $flower['name'] ?></h3>
                <p><?= $flower['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
