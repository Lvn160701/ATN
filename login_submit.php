<?php
session_start();
include 'connect.php';
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        echo '<p style="text-align: center;">Hãy điền đầy đủ thông tin!!!</p>';
    } else {
        $sql = "SELECT * FROM `list_register` WHERE username='$username' and password='$password'"; // so sánh đến tên ng dùng và mật khẩu
        $query = $connect->query($sql);
        foreach ($query as $key => $value) {
            if ($query->rowCount() == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['image'] = $value['image'];
                header('location:index.php');
            } else {
                echo "<h1> Đang nhập k thành công</h1>";
            }
        }
    }
}
