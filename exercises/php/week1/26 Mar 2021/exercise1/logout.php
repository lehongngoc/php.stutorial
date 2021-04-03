<?php session_start(); 
 
if (isset($_SESSION['firstname'])){
    unset($_SESSION['firstname']); // xóa session login
}
?>
<a href="home_page.php">HOME</a>