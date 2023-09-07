<?php
    require_once "koneksi.php";
    $data = $_GET['data'];
    $sqldelete = "DELETE FROM TUBES WHERE id = " . $data;
    mysqli_query($conn, $sqldelete);
    header('Location: ' . $_SERVER['HTTP_REFERER']);