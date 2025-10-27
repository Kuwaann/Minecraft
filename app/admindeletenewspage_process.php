<?php
    include __DIR__ . '/../config/config.php';
    include __DIR__ . '/../config.php';
    $id_news = $_GET['id_news'];

    $stmt = mysqli_prepare($conn, "DELETE FROM news WHERE id_news = ?");
    mysqli_stmt_bind_param($stmt,"s",$id_news);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header('Location: ' . PUBLIC_URL . '/admindashboardpage.php');
?>