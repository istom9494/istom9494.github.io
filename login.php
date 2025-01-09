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
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "登录成功";
        } else {
            echo "密码错误";
        }
    } else {
        echo "用户名不存在";
    }
}

// 关闭连接
mysqli_close($conn);
?>