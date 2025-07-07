<?php function blog($data)
{
    // 🔢 Pagination logic
    // $currentPage = isset($_POST['page']) ? (int)$_POST['page'] : 1;
    // $perPage = 5;
    // $totalData = count($data);
    // $totalPages = ceil($totalData / $perPage);
    // $currentPage = max(1, min($currentPage, $totalPages));

    // $startIndex = ($currentPage - 1) * $perPage;
    // $pagedData = array_slice($data, $startIndex, $perPage);
?>
    <main class="flex h-screen">
        <?php sidebar(); ?>
        <section class="ml-[300px] flex-1 overflow-y-auto h-screen">
            <?php navbar("My Blogs"); ?>
            <?php if ($data /* ganti jadi totaldata jika mau bikin pagination */ > 0) { ?>
                <div class="w-full p-6">
                    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
                        <table class="w-full text-xs text-left text-gray-600">
                            <thead class="text-[10px] text-gray-500 uppercase bg-white border-b border-gray-200">
                                <tr>
                                    <th class="px-4 py-3 font-extrabold">THUMBNAIL</th>
                                    <th class="px-4 py-3 font-extrabold">TITLE</th>
                                    <th class="px-4 py-3 font-extrabold">SLUG</th>
                                    <th class="px-4 py-3 font-extrabold">CATEGORY</th>
                                    <th class="px-4 py-3 font-extrabold">CREATED AT</th>
                                    <th class="px-4 py-3 font-extrabold">STATUS</th>
                                    <th class="px-4 py-3 font-extrabold">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data /* pke $pageddata klo mau ada pagination */ as $key): ?>
                                    <tr>
                                        <td class="px-4 py-3"><img src="<?= $key['image_url'] ?>"
                                                class="w-16 h-16 rounded-md object-cover"></td>
                                        <td class="px-4 py-3"><?= $key['article_name'] ?></td>
                                        <td class="px-4 py-3"><?= $key['slug'] ?></td>
                                        <td class="px-4 py-3"><?= $key['article_type'] ?></td>
                                        <td class="px-4 py-3"><?= $key['created_at'] ?></td>
                                        <td class="px-4 py-3"><span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800"><?= $key['status'] ?></span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="inline-flex space-x-2 items-center">
                                                <a href="/blog/edit/<?= $key['slug'] ?>"
                                                    class="bg-[#2a2aff] text-white p-2 rounded-sm hover:bg-[#1a1ad1] transition inline-flex items-center justify-center">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="/blog/deleteblog/<?= $key['slug'] ?>"
                                                    class="bg-[#ff0066] text-white p-2 rounded-sm hover:bg-[#cc0052] transition inline-flex items-center justify-center">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- 🔁 Pagination -->
                    <!-- <form method="POST" class="flex justify-center mt-6 space-x-2">
                        <php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <button type="submit" name="page" value="< = $i ?>"
                                class="px-3 py-1 rounded < = ($i == $currentPage) ? 'bg-blue-600 text-white' : 'bg-gray-200 hover:bg-gray-300' ?>">
                                <= $i ?>
                            </button>
                        < php endfor; ?>
                    </form> -->

                </div>
            <?php } else { ?>
                <div class="mt-[150px]">
                    <img src="/public/assets/error.jpg" alt="error image" width="200" class="justify-self-center">
                    <h1 class="text-center font-semibold text-2xl">You don't have any blog :(</h1>
                    <p class="text-center mt-2">
                        <a href="/create" class="underline text-blue-900">Create here to create a blog</a>
                    </p>
                </div>
            <?php } ?>
        </section>
    </main>
<?php } ?>