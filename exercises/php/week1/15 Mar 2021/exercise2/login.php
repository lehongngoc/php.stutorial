<?php
session_start();
if (isset($_SESSION['name'])&&!empty($_SESSION['name'])){
    echo "login success"."<br>";
    echo "Your Name:".$_SESSION['name'];
    echo "<a href='check-logout.php'>Logout</a>";

}
else{
    echo "Bạn cần đăng nhập để sử dụng chức năng này !";
    header('Refresh:2;url=index.php',true,303);
    session_unset();
    session_destroy();
}