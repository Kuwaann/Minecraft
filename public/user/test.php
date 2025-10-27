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
            require_once __DIR__ . '/components/_header.php';
        ?>
        <main>
            <section class="hero relative">
                <img src="./images/3.jpg" class="object-cover" alt="">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col">
                    <img src="./images/minecraft_logo.png" class="mb-6" alt="">
                    <h1 class="font-black text-white text-center text-4xl mb-3 Minecrafter drop-shadow-lg">PLACE YOUR FIRST BLOCK NOW!</h1>
                    <div class="flex gap-4 w-full">
                        <button class="flex-grow bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] w-100% h-12 cursor-pointer MinecraftSevenV2 drop-shadow-lg">Download on Windows</button>
                        <button class="flex-grow bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] w-100% h-12 cursor-pointer MinecraftSevenV2 drop-shadow-lg">Download on MacOS</button>
                    </div>
                    
                </div>
            </section>
            <section class="border-t-4 border-gray-800 flex justify-center items-center h-[130vh]">
                <div class="px-52 w-full">
                    <div class="flex justify-center mb-8">
                        <img src="./images/minecraft_logo.png" class="w-[400px]" alt="">
                    </div>
                    <h1 class="font-black text-white text-4xl mb-10 Minecrafter drop-shadow-lg">INGAME SCREENSHOTS</h1>
                    <div class="flex gap-4 h-auto">
                        <div class="flex-[3]"><img src="https://sm.ign.com/ign_ap/gallery/m/minecraft-/minecraft-vibrant-visuals-comparison-screenshots_25we.jpg" class="w-full h-full object-cover"></div>
                        <div class="flex flex-1 flex-col gap-4 box-border">
                            <img src="https://sm.ign.com/ign_ap/gallery/m/minecraft-/minecraft-vibrant-visuals-comparison-screenshots_25we.jpg" class="w-full h-full object-cover border-4 border-[#2fff2f] cursor-pointer">
                            <img src="https://pub-f354ec240bea480db7320bd0e29d972e.r2.dev/sites/2/2025/03/MCL_Broll_CustomBuild_AG_01-ba5477d30cc1ddde2e9d.jpg" class="w-full h-full object-cover border-4 border-gray-800 opacity-80 cursor-pointer">
                            <img src="https://admin.esports.gg/wp-content/uploads/2025/03/Minecraft-overworld-968x544.jpg" class="w-full h-full object-cover border-4 border-gray-800 opacity-80 cursor-pointer">
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-[#1f1f1f] h-screen box-border">
                <div class="px-52 py-20 w-full h-screen">
                    <div class="w-full flex justify-between items-center mb-10">
                        <h1 class="font-black text-white text-4xl Minecrafter drop-shadow-lg">News</h1>
                        <a href="../public/newspage.php" class="bg-transparent border-2 border-[#2fff2f] text-[#2fff2f] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">VIEW MORE</a>
                    </div>
                    
                    <div class="news w-full box-border flex justify-between items-center">
                        <div class="news-item w-[300px] h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <p></p>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                        <div class="news-item w-[300px] h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                        <div class="news-item w-[300px] h-auto bg-[#131313] p-5 overflow-hidden">
                            <img src="https://www.minecraft.net/content/dam/minecraftnet/games/minecraft/screenshots/MCV_ChaseTheSkies_Mesa01_VV_.net_1170x500.jpg" class="object-cover w-full h-[150px] mb-5" alt="">
                            <h2 class="title text-white Minecrafter">The road to Vibrant Visuals on Java</h2>
                            <div class="w-full h-[100px] overflow-hidden">
                                <p class="multiline-ellipsis text-white text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur esse, ad sequi doloribus impedit totam saepe beatae ipsum, unde, dolores voluptates ab fuga voluptate iste cum omnis eaque dolorem! Culpa.</p>
                            </div>
                            <button class="bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer MinecraftSevenV2 text-sm px-6">READ MORE</button>
                        </div>
                    </div>
                </div>
            </section">
            <section name="" class="w-full h-screen relative border-t-8 border-[#0f0f0fc7]">
                <div class="w-full h-full">
                    <img src="./images/support.jpg" class="w-full h-full object-cover opacity-8" alt="">
                </div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col">
                    <div class="bg-[#0f0f0f] border-4 border-[#1f1f1f] box-border p-5 w-[800px] drop-shadow-xl">
                        <h1 class="text-3xl Minecrafter text-center text-white mb-10">WE'D LOVE TO HEAR YOUR FEEDBACK</h1>
                        <div class="flex flex-col w-full mb-10">
                            <label for="email" class="MinecraftSevenV2 text-white mb-3">Email</label>
                            <input type="email" name="" id="email" class="bg-[#1f1f1f] h-10 border-[#1f1f1f] mb-10">
                            <label for="msg" class="MinecraftSevenV2 text-white mb-3">Message</label>
                            <textarea name="" id="msg" class="bg-[#1f1f1f] h-10 border-[#1f1f1f]"></textarea>
                        </div>
                        <button class="w-full bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer Minecrafter text-md px-6">SUBMIT</button>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
