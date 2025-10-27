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
        <main>
            <section class="box-border">
                <div class="flex">
                    <div class="flex-[3] h-screen">
                        <img src="../public/images/minecraft.jpeg" class="object-cover h-full" alt="">
                    </div>
                    <div class="flex-[2] flex flex-col justify-center items-center w-full border-l-[8px] border-l-gray-800 px-5">
                        <h1 class="Minecrafter text-white text-4xl text-center mb-3">LOGIN</h1>
                        <h2 class="text-white MinecraftSevenV2 mb-3">Enter your valid credentials.</h2>
                        <hr class="w-full border-t-2 border-white opacity-70 mb-5">
                        <form class="w-full mb-5" action="../app/login_process.php" method="POST">
                            <div class="form-item w-full mb-5">
                                <label for="email" class="text-white MinecraftSevenV2 mb-3">Email</label>
                                <input type="email" name="email" id="email" class="px-3 h-10 w-full border-[2px] border-[#333333] bg-[#1f1f1f] text-white MinecraftSevenV2">
                            </div>
                            <div class="form-item w-full mb-5">
                                <label for="password" class="text-white MinecraftSevenV2 mb-3">Password</label>
                                <input type="password" name="password" id="password" class="px-3 h-10 w-full border-[2px] border-[#333333] bg-[#1f1f1f] text-white MinecraftSevenV2">
                            </div>
                            <button type="submit" class="w-full bg-[#00be00] border-4 border-[#2fff2f] text-[#ffffff] h-12 cursor-pointer Minecrafter text-md px-6">LOGIN</button>
                        </form>
                        <p class="text-white">Don't have an account? <a href="../public/registerpage.php" class="text-[#2fff2f]">Create an Account</a> or <a href="../public/homepage.php" class="text-[#2fff2f]">Guest Mode</a></p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
