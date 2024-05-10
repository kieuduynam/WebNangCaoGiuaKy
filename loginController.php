<?php
session_start();
require_once '../config/database.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM User WHERE TenUser = :username AND MatKhau = :password");
    $stmt->execute(array(':username' => $username, ':password' => $password));

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION['username'] = $username;
        header("Location: ../view/sach.php");
        exit;
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
        header("Location: ../view/login.php?error=$error");
        exit;
    }
}
?>
