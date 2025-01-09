<?php
// 数据库主机名，通常为localhost，如果是远程数据库则填写对应IP地址
$servername = "localhost";
// 数据库用户名
$username = "your_username";
// 数据库密码
$password = "your_password";
// 数据库名称
$dbname = "login_register_db";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 检查连接是否成功
if (!$conn) {
    die("连接失败: ". mysqli_connect_error());
}
?>