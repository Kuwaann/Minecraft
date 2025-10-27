<?php
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../app/functions.php';
    require_once __DIR__ . '/../app/auth.php';

    $sql = "SELECT id_news, judul_news, slug_news, gambar_news, text_news, tanggal_news FROM news ORDER BY tanggal_news DESC";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
                <div class="pt-36 mb-52">
                    <h2 class="text-white Minecrafter text-4xl text-center mb-10">NEWS</h2>
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 place-items-center box-border">
                        <?php foreach($news as $n): ?>
                        <div class="news-item w-full h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="<?= PUBLIC_URL ?>/images/uploads/<?= $n['gambar_news'] ?>" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter"><?= $n['judul_news'] ?></h2>
                            <p></p>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify"><?= $n['text_news'] ?></p>
                            </div>
                            <a href="singlepost.php" class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
            </section>
        </main>
    </body>
</html>
