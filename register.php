<?php
require_once('db_connect.php'); // 引入数据库连接文件

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // 数据验证
    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // 密码哈希处理
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 使用公共函数创建数据库连接
    $conn = db_connect();

    // 插入用户信息
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>