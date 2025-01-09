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

// 创建数据库（如果不存在）
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql_create_db)) {
    echo "数据库创建成功或已存在<br>";
    mysqli_select_db($conn, $dbname);
    // 创建用户表
    $sql_create_table = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        email VARCHAR(100)
    )";
    if (mysqli_query($conn, $sql_create_table)) {
        echo "表创建成功";
    } else {
        echo "创建表出错: ". mysqli_error($conn);
    }
} else {
    echo "创建数据库出错: ". mysqli_error($conn);
}

// 关闭连接
mysqli_close($conn);
?>