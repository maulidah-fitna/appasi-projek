<?php
    if (!defined('INDEX')) header('location: index.php');

    $halaman = [
        "dashboard",
        "data-absen",
        "tambah-siswa",
        "xaklpa",
        "xaklpi"
    ];

    if (isset($_GET['hal'])) {
        $hal = $_GET['hal'];
    }else{
        $hal = 'dashboard';
    }

    foreach($halaman as $h) {
        if ($hal == $h) {
            include "content/$h.php";
            break;
        }
    }

?>