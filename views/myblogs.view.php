<?php
function myblogs($data)
{
    if (isset($data)) {
?>
        <div class="bg-white rounded-xl shadow-lg p-6 w-2/3 mx-auto mt-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Artikel</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Gambar</th>
                            <th scope="col" class="px-6 py-3">Judul</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Slug</th>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Tanggal Publish</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $key) { ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="p-4">
                                    <img src="<?= $key['image_url'] ?>" alt="Gambar Artikel 1"
                                        class="w-16 h-16 rounded-md object-cover">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    <?= $key['article_name'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <?= $key['status'] ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-mono text-gray-600">
                                    <?= $key['slug'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $key['article_type'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $key['created_at'] ?>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <a href="/blog/edit/<?= $key['slug'] ?>"
                                        class="font-medium text-blue-600 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


<?php } else {
        echo "you don't have any blog :(";
    }
} ?>