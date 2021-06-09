<?php
include 'connect.php';
if (isset($_POST['register_submit'])) {
    $file = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $path = "img/";
    move_uploaded_file($file_tmp, $path . $file);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "insert into list_register values (NULL,'$username','$email','$password','$file')";
    $result = $connect->exec($sql);
    if ($result) {
        echo "<script>alert('Account has been created successfully!')</script>";
        header("location:account.php");
    } else {
        echo "<script>alert('Error!')</script>";
    }
}
