<?php
session_start();
include "config.php";

if(!defined('INDEX')) die();

?>

<h2>Sign-In</h2>

<form action="cek-login.php" method="post">
    <input type="text" name="usernmae" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Sign In">
</form>

<?php
echo "Belum Punya Akun? <a href='buat-akun.php'>Buat Akun</a>"
?>