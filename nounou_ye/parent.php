<?php
session_start();
$email = $_SESSION['email'];
echo "$email";
echo("parent 的页面");
?>
