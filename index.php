<?php
session_start();
include "config.php";

if(!defined('INDEX')) die();

header("location: index.php")
?>

<title>Appasi | Landing Page</title>

<form action="login.php" method="post">
    <button type="submit" class="tombol-masuk"></button>
</form>

<style>
    .tombol-masuk {
        background-color: white;
        boder: 2px solid black;
        border-radius: 10px;
        paddiing: 10px 20px;
        font-size: 18px;
        font-weigth: bold;
        cursor: pointer;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
    }

    .tombol-masuk:hover {
        background-color: #ddd;
    }
</style>