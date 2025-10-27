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
            <div class="flex my-32 px-24 h-full">
                <div class="side-bar flex flex-col bg-[#1f1f1f] border-2 border-[#3f3f3f] mr-10 p-10 box-border w-72 h-ful justify-center items-center">
                    <h1 class="text-white Minecrafter text-3xl mb-3 text-left">Dashboard Menu</h1>
                    <hr class="border-t-2 border-t-white mb-10 w-full">
                    <div class="w-full flex flex-col">
                        <a href="" class="text-white Minecrafter text-lg mb-5 text-left bg-[#3f3f3f] p-3">Dashboard</a>
                        <a href="" class="text-white Minecrafter text-lg mb-5 text-left bg-[#3f3f3f] p-3">News</a>
                        <a href="" class="text-white Minecrafter text-lg mb-5 text-left bg-[#3f3f3f] p-3">Feedbacks</a>
                        <a href="" class="text-white Minecrafter text-lg mb-5 text-left bg-[#3f3f3f] p-3">Accounts</a>
                    </div>
                </div>
                <div class="content flex-grow w-10 box-border" id="news">
                    <h1 class="text-white Minecrafter text-3xl mb-3 text-left">NEWS</h1>
                    <div class="mb-3">
                        <a href="adminaddnewspage.php" class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">+</a>
                    </div>
                    <?php if(count($news) > 0): ?>
                    <table class="bg-[#3f3f3f] border-2 border-[#3f3f3f] border-collapse table-fixed w-full max-w-full">
                        <thead class="bg-[#3f3f3f]">
                            <tr>
                                <th class="text-sm text-white MinecraftSevenV2 px-2 py-2 w-auto text-center border-2 border-[#3f3f3f]">ID</th>
                                <th class="text-sm text-white MinecraftSevenV2 px=2 py-2 text-left w-[100px] max-w-[90px] border-2 border-[#3f3f3f]">Image</th>
                                <th class="text-sm text-white MinecraftSevenV2 px-2 py-2 text-left border-2 border-[#3f3f3f]">Title</th>
                                <th class="text-sm text-white MinecraftSevenV2 px-2 py-2 text-left border-2 border-[#3f3f3f]">Description</th>
                                <th class="text-sm text-white MinecraftSevenV2 px-2 py-2 text-left border-2 border-[#3f3f3f]"></th>
                                <th class="text-sm text-white MinecraftSevenV2 px-2 py-2 text-left border-2 border-[#3f3f3f]"></th>
                            </tr>
                        <tbody class="bg-[#1f1f1f]">
                            <?php foreach($news as $n): ?>
                            <tr>
                                <td class="text-white text-center px-2 py-2"><?= $n['id_news'] ?></td>
                                <td class="text-white px-2 py-2"><img src="<?= PUBLIC_URL ?>/images/uploads/<?= $n['gambar_news'] ?>" alt="" class=""></td>
                                <td class="text-white px-2 py-2"><?= $n['judul_news'] ?></td>
                                <td class="text-white px-2 py-2 truncate"><?= $n['text_news'] ?></td>
                                <td class="text-[#2fff2f] px-2 py-2 text-center"><a href="">Edit</a></td>
                                <td class="text-red-500 px-2 py-2 text-center"><a href="">Delete</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </thead>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </body>
</html>
