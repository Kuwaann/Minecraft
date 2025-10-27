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
                        <div class="news-item w-full h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <p></p>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                        <div class="news-item w-full h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                        <div class="news-item w-full h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                        <div class="news-item w-full h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                    </div>
                </div>
                
            </section>
        </main>
    </body>
</html>