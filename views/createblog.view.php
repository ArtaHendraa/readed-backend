<?php
function createblog()
{ ?>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-lg">

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