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
        <link rel="stylesheet" href="./css/admin_dashboard.css">
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
            require_once __DIR__ . '/./components/_admindashboardheader.php';
        ?>
        <main>
            <div class="flex pt-32 px-52 h-full">
                <div class="content w-full bg-[#131313] border-t-4 border-t-[#1f1f1f] border-l-4 border-l-[#3f3f3f] p-10" id="news">
                    <h1 class="text-white Minecrafter text-3xl mb-3 text-left">ADD NEWS</h1>
                    <form action="../app/adminaddnewspage_process.php" method="POST" enctype="multipart/form-data" class="mt-5 w-full">
                        <div class="form-item mb-5">
                            <label for="judul" class="text-white text-lg">Judul</label>
                            <input type="judul" name="judul" id="" class="w-full h-10 bg-[#0f0f0f] text-white MinecraftSevenV2 px-2">
                        </div>
                        <div class="form-item mb-5">
                            <label for="gambar" class="text-white">Gambar</label>
                            <input type="file" name="gambar" accept="image/*" class="w-full h-10 bg-[#0f0f0f] text-white MinecraftSevenV2 px-2">
                        </div>
                        <div class="form-item mb-5">
                            <label for="text" class="text-white">Text</label>
                            <textarea name="text" id="text" class="w-full h-10 bg-[#0f0f0f] text-white MinecraftSevenV2 px-2"></textarea>
                        </div>
                        <button type="submit" class="mt-5 bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">SUBMIT</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="https://cdn.tiny.cloud/1/pveptn3rvibyvg0w1znpaddkzpnzut5pfy7bp4qlmyov14pl/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: 'image link media table lists code',
            toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code',
            menubar: false
            });
        </script>
    </body>
</html>
