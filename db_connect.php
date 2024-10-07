<?php
// db_connect.php

function db_connect() {
    $servername = "localhost";
    $username = "root"; // 通常是root
    $password = ""; // 如果没有设置密码，则留空
    $dbname = "china_travel"; // 替换为您的数据库名称

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 检查连接
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn; // 返回连接对象
}
?>