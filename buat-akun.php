<?php
session_start();
include "config.php";

if(!defined('INDEX')) die();
?>

<h2>Buat Akun</h2>
<form action="cek-login.php" method="post">
    <input type="text" name="username" placeholder="Username" id="">
    <input type="password" name="password" placeholder="Password" id="">
</form>