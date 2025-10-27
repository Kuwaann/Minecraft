<?php
    require_once __DIR__ . '/../../config.php';
    require_once APP_PATH . '/auth.php';
?>

<header class="">
    <nav class="h-auto navbar z-[1000] box-border">
        <div class="navbar-contents box-border">
            <a class="logo" href="../public/homepage.php">
                <img src="./images/minecraft_logo.png" class="hover:scale-110 transition-all" alt="">
            </a>
            <div class="navbar-items box-border">
                <?php if(e(!is_logged_in())): ?>
                <div class="navbar-item ml-10"><a href="../public/loginpage.php" class="login-button border-4 border-[#7cff7c] px-6">LOGIN</a></div>
                <?php else: ?>
                <div class="w-auto navbar-item relative group">
                    <button id="account" class="navbar-item ml-10 flex gap-4 box-border hover:[filter:brightness(0)_saturate(100%)_invert(67%)_sepia(99%)_saturate(440%)_hue-rotate(62deg)_brightness(100%)_contrast(101%)] transition-all">
                        <img src="./images/arrow.png" id="accountArrow" class="w-5 -rotate-180 group-hover:rotate-0 transition" alt="">
                        <p class="text-white"><?php echo e(current_user_name()); ?></p>
                    </button>
                    <div id="accountBox" class="m-auto w-96 shadow-lg absolute top-full -right-1 py-2 hidden group-hover:block bg-[#0f0f0f] border-4 border-[#1f1f1f] z-1000 px-3 transition">
                        <div class="flex flex-col">
                            <?php if(current_user_role() === 'admin'): ?>
                            <a href="../public/admindashboardpage.php" class="text-white mb-3">Admin Dashboard</a>
                            <hr class="mb-3 opacity-80 border-t-2 w-full">    
                            <?php endif; ?>
                            <a href="../app/logout_process.php" class="text-red-500">Log Out</a>
                        </div>    
                    </div>
                </div>

                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<!-- <script>
    const accountButton = document.getElementById("account");
    const accountBox = document.getElementById("accountBox");
    const accountArrow = document.getElementById("accountArrow");
    let isOpen = false;

    accountButton.addEventListener("click", () => {
        accountArrow.classList.toggle('rotate-180');
        accountBox.classList.toggle('hidden');
    })
</script> -->