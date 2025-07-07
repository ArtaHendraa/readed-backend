<?php
function navbar($nama_page)
{
    changeTitle($nama_page);
?>
    <nav class="w-full border-b border-[#d1d9e6] px-6 py-3 flex items-center justify-between">
        <h1 class="text-xl font-bold"><?= $nama_page ?></h1>
        <div class="flex items-center gap-3 mr-3">
            <a href="/profile"><span
                    class="text-sm text-gray-800 font-semibold"><?= $_SESSION['user_data']['username'] ?></span></a>
        </div>
    </nav>
<?php } ?>