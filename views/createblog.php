<?php
function createblog($status)
{ ?>
    <div class="flex items-center justify-center min-h-screen">

        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-lg">
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
            <h2 class="text-3xl font-bold text-center text-gray-800">
                Buat Artikel Baru
            </h2>

            <form method="post" enctype="multipart/form-data" class="space-y-6">

                <div>
                    <label for="article_name" class="block mb-2 text-sm font-medium text-gray-700">Judul Artikel</label>
                    <input type="text" id="article_name" name="article_name"
                        placeholder="Contoh: Cara Belajar Tailwind CSS dalam Semalam"
                        class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                </div>

                <div>
                    <label for="article_type" class="block mb-2 text-sm font-medium text-gray-700">Tipe</label>
                    <input type="text" id="article_type" name="article_type" placeholder="Contoh: Tutorial, Berita, Opini"
                        class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                </div>

                <div>
                    <label for="image_url" class="block mb-2 text-sm font-medium text-gray-700">Gambar Sampul</label>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" name="image_url" id="image_url" class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700
                        hover:file:bg-blue-100
                    " />
                    </label>
                    <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB.</p>
                </div>


                <div>
                    <button type="submit" name="createblogBtn"
                        class="w-full px-4 py-3 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                        Create
                    </button>
                </div>

            </form>
        </div>
    </div>
<?php } ?>