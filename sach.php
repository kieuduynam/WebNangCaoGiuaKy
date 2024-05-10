<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

require_once '../config/database.php';

$stmt = $db->query("SELECT * FROM Sach LIMIT 5");
$sachs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sách</title>
</head>
<body>
    <h2>Danh sách Sách</h2>
    <table border="1">
        <tr>
            <th>Mã Sách</th>
            <th>Tên Sách</th>
            <th>Số Lượng</th>
        </tr>
        <?php foreach($sachs as $sach): ?>
        <tr>
            <td><?= $sach['MaSach']; ?></td>
            <td><?= $sach['TenSach']; ?></td>
            <td><?= $sach['SoLuong']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="../controller/logoutController.php">Logout</a>
</body>
</html>
