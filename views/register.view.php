<?php
function register($status = [])
{ ?>
<?php
    ?>
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-xl shadow-lg">

        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900">Buat Akun Baru</h1>
            <p class="mt-2 text-sm text-gray-600">Hanya butuh beberapa detik!</p>
        </div>
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

        <form method="post" class="space-y-5">

            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" placeholder="Pilih username unik"
                    class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="kamu@email.com"
                    class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"
                    class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="terms" name="terms" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" required>
                </div>
                <div class="ml-3 text-sm">
                    <label for="terms" class="font-light text-gray-600">Saya setuju dengan <a href="#"
                            class="font-medium text-blue-600 hover:underline">Syarat & Ketentuan</a></label>
                </div>
            </div>

            <div>
                <button type="submit" name="registerBtn"
                    class="w-full px-4 py-3 mt-2 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Register
                </button>
            </div>

            <p class="text-sm text-center text-gray-600">
                Sudah punya akun?
                <a href="/login" class="font-medium text-blue-600 hover:underline">Login di sini</a>
            </p>

        </form>
    </div>

</div>
<?php }