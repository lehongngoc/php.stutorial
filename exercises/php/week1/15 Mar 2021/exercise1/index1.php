<?php
session_start();
echo "Đăng nhập thành công!" . "<br>";
echo "Tên của bạn:" . $_POST['name']. "<br>";
session_unset();
session_destroy();
?>