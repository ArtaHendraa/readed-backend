<?php
include("views/components/sidebar.php");
include("views/components/navbar.php");
function home($data)
{

    if ($data != null) {
        $drafts = array_filter($data, function ($item) {
            return $item['status'] === 'draft';
        });
        $limit = 0;
    }
    // // Step 2: Sort berdasarkan tanggal terbaru
    // usort($drafts, function ($a, $b) {
    //     return strtotime($b['created_at']) - strtotime($a['created_at']);
    // });
?>
    <main class="flex h-screen">
        <?php sidebar(); ?>
        <section class="ml-[300px] flex-1 overflow-y-auto h-screen">
            <?php navbar("Dashboard"); ?>
            <div class="w-full p-6 mx-auto space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="col-span-1 md:col-span-1">
                        <div class="border border-gray-300 rounded-md p-4 mb-4">
                            <h2 class="font-bold text-lg leading-none">
                                Welcome <?= $_SESSION['user_data']['username'] ?><span>👋</span>
                            </h2>
                        </div>
                        <div class="bg-[#2E2AE6] rounded-md p-6">
                            <h3 class="text-white font-semibold text-base mb-1">
                                Total Post
                            </h3>
                            <p class="text-white font-extrabold text-5xl leading-none">
                                <?php try {
                                    echo count($data);
                                } catch (\Throwable $th) {
                                    echo "0";
                                } ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 md:col-span-2 bg-[#F5F8FF] rounded-md border border-[#D1D9E6]">
                        <div class="flex justify-between items-center px-4 py-4">
                            <h3 class="font-bold text-base">Draft Posts</h3>
                        </div>
                        <table class="w-full text-xs text-[#6B7A99] border-collapse border border-[#D1D9E6]">
                            <thead class="border-b border-[#D1D9E6] bg-[#F5F8FF]">
                                <tr>
                                    <th class="text-left px-3 py-2 font-semibold">THUMBNAIL</th>
                                    <th class="text-left px-3 py-2 font-semibold">TITLE</th>
                                    <th class="text-left px-3 py-2 font-semibold">CATEGORY</th>
                                    <th class="text-left px-3 py-2 font-semibold">
                                        CREATED AT
                                    </th>
                                    <th class="text-left px-3 py-2 font-semibold">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($drafts)): foreach ($drafts as $key): ?>
                                        <?php if ($limit < 1): ?>
                                            <tr class="border-b border-[#D1D9E6] bg-white">
                                                <td class="px-3 py-2"><img src="<?= $key['image_url'] ?>"
                                                        class="w-16 h-16 rounded-md object-cover"></td>
                                                <td class="px-3 py-2 truncate max-w-[180px]">
                                                    <?= $key['article_name'] ?>
                                                </td>
                                                <td class="px-3 py-2"><?= $key['article_type'] ?></td>
                                                <td class="px-3 py-2"><?= $key['created_at'] ?></td>
                                                <td class="px-3 py-2 space-x-2">
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
                                        <?php endif; ?>
                                <?php $limit++;
                                    endforeach;
                                endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div></div>

                <div class="bg-white rounded-md border border-[#D1D9E6] p-4">
                    <h4 class="text-xs font-semibold text-[#6B7A99] mb-2">
                        Latest Posts
                    </h4>
                    <table class="w-full text-xs text-[#6B7A99] border-collapse border border-[#D1D9E6]">
                        <thead class="border-b border-[#D1D9E6] bg-[#F5F8FF]">
                            <tr>
                                <th class="text-left px-3 py-2 font-semibold">THUMBNAIL</th>
                                <th class="text-left px-3 py-2 font-semibold">TITLE</th>
                                <th class="text-left px-3 py-2 font-semibold">CATEGORY</th>
                                <th class="text-left px-3 py-2 font-semibold">CREATED AT</th>
                                <th class="text-left px-3 py-2 font-semibold">STATUS</th>
                                <th class="text-left px-3 py-2 font-semibold">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($data)): foreach ($data as $key): ?>
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
                            <?php endforeach;
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

<?php }
