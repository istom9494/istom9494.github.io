<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "login_register_db";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检查连接是否成功
if (!$conn) {
    die("连接失败: ". mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "注册成功";
    } else {
        echo "注册失败: ". mysqli_error($conn);
    }
}

// 关闭连接
mysqli_close($conn);
?>