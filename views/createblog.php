<?php
include_once("views/components/sidebar.php");
include_once("views/components/navbar.php");
function createblog($status, $category)
{ ?>
    <main class="flex h-screen">
        <?php sidebar() ?>
        <section class="ml-[300px] flex-1 overflow-y-auto h-screen">
            <?php navbar("Create Blog"); ?>
            <form action="" enctype="multipart/form-data" method="post" class="flex flex-col gap-6 p-6 w-full">
                <div class="p-4 text-sm rounded-lg  <?= !isset($status) ? 'hidden' : 'block' ?> <?= $status['Status'] ? 'text-green-800 border border-green-300 bg-green-50' : 'text-red-800 border border-red-300 bg-red-50' ?>"
                    role="alert">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="font-medium"> &nbsp; </span> <?= $status['Pesan'] ?>
                    </div>
                </div>
                <div class="flex flex-col gap-4 border border-[#d1d9e6] rounded-md p-5 flex-1 min-w-[280px]">
                    <label for="post-title" class="text-sm font-semibold text-black">Post title</label>
                    <input id="post-title" type="text" name="article_name" placeholder="Write your post title" required
                        class="border border-[#cbd5e1] rounded-md px-3 py-2 text-xs placeholder:text-[#cbd5e1] focus:outline-none focus:ring-1 focus:ring-[#3b3bff]" />
                    <label for="thumbnail" class="text-sm font-semibold text-black">Thumbnail</label>
                    <input id="thumbnail" type="file" name="image_url" required
                        class="border border-[#cbd5e1] rounded-md px-3 py-2 text-xs placeholder:text-[#cbd5e1] focus:outline-none focus:ring-1 focus:ring-[#3b3bff]"
                        aria-placeholder="Tidak ada file yang dipilih" />
                </div>
                <div class="flex flex-col gap-4 border border-[#d1d9e6] rounded-md p-5 flex-1 min-w-[280px]">
                    <label for="category" class="text-sm font-semibold text-black">Category</label>
                    <select id="category" name="article_type"
                        class="border border-[#cbd5e1] rounded-md px-3 py-2 text-xs placeholder:text-[#cbd5e1] focus:outline-none focus:ring-1 focus:ring-[#3b3bff]"
                        aria-placeholder="--Category--">
                        <option disabled selected>--Category--</option>
                        <?php foreach ($category as $key): ?>
                            <option value="<?= $key['category'] ?>"><?= ucwords($key['category']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="w-full mt-2">
                    <button type="submit" name="createblogBtn" class="bg-[#2a2aff] text-white rounded-md px-4 py-2">
                        Create
                    </button>
                </div>
            </form>
        </section>
    </main>

<?php } ?>