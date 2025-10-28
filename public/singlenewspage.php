<?php
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../app/functions.php';
    require_once __DIR__ . '/../app/auth.php';

        $id_news = $_GET['id_news'];
        $stmt = mysqli_prepare($conn,"SELECT * FROM news WHERE id_news = ? LIMIT 1");
        mysqli_stmt_bind_param($stmt,'s',$id_news);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $news = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);

    
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Minecraft</title>
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="./css/user_homepage.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .multiline-ellipsis {
                display: -webkit-box;
                -webkit-line-clamp: 3; /* jumlah baris */
                line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <?php
            require_once __DIR__ . '/./components/_header.php';
        ?>
        <main>
            <section class="flex flex-col justify-center items-center h-auto px-48">
                <div class="pt-36 mb-52 w-full">
                    <div class="w-full">
                        <img src="<?= PUBLIC_URL ?>/images/uploads/<?= $news['gambar_news']; ?>" alt="" class="mb-10 w-full max-h-[350px] object-cover">
                        <h1 class="text-4xl text-white Minecrafter"><?= $news['judul_news'] ?></h1>
                        <p class="text-md text-white mb-5"><?= $news['tanggal_news'] ?></p>
                        <p class="text-md text-white"><?= $news['text_news'] ?></p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>