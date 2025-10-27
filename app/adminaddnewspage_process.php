<?php
    require_once __DIR__ . '/../config/config.php';
    include __DIR__ . '/../config.php';
    include './functions.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $judul = $_POST['judul'];
        $slug = slugify($judul);
        $text = $_POST['text'];
        $tanggal = date('Y-m-d H:i:s');

        $gambar_name = $_FILES['gambar']['name'];
        $gambar_tmp = $_FILES['gambar']['tmp_name'];
        $gambar_path = PUBLIC_PATH . '/images/uploads/' . basename($gambar_name);

        move_uploaded_file($gambar_tmp, $gambar_path);

        $sql = "INSERT INTO news (judul_news,slug_news,gambar_news,text_news,tanggal_news) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,'sssss', $judul, $slug, $gambar_name, $text, $tanggal);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header('Location: ' . PUBLIC_URL . '/admindashboardpage.php');
        exit;
    }
    
?>