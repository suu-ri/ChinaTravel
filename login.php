<?php
require_once('db_connect.php'); // 引入数据库连接文件

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));

    // 数据验证
    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
        exit;
    }

    // 使用公共函数创建数据库连接
    $conn = db_connect();

    // 查询用户信息
    $sql = "SELECT password FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // 获取哈希密码
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            // 在这里可以设置会话或重定向用户到其他页面
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $conn->close();
}
?>