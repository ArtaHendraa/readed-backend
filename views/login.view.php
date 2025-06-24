<?php
function login($result)
{
    $value = "";
    if (isset($_COOKIE['username'])) {
        $value = $_COOKIE['username'];
    }
?>
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm p-8 space-y-6 bg-white rounded-xl shadow-md">

            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-900">Selamat Datang!</h1>
                <p class="mt-2 text-sm text-gray-600">Silakan login ke akunmu</p>
            </div>

            <div class="p-4 text-sm rounded-lg  <?= !isset($result) ? 'hidden' : 'block' ?> <?= $result['Status'] ? 'text-green-800 border border-green-300 bg-green-50' : 'text-red-800 border border-red-300 bg-red-50' ?>"
                role="alert">
                <div class="flex items-center">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="font-medium"> &nbsp; </span> <?= $result['Pesan'] ?>
                </div>
            </div>


            <form method="post" class="space-y-6">

                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username atau Email</label>
                    <input type="text" id="username" placeholder="nama_kamu" name="username" value="<?= $value ?>"
                        class="w-full px-4 py-3 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        required>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <a href="#" class="text-sm text-blue-600 hover:underline">Lupa password?</a>
                    </div>
                    <input type="password" id="password" placeholder="••••••••" name="password"
                        class="w-full px-4 py-3 mt-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
                        required>
                </div>

                <div>
                    <button type="submit" name="loginBtn"
                        class="w-full px-4 py-3 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                        Login
                    </button>
                </div>

                <p class="text-sm text-center text-gray-600">
                    Belum punya akun?
                    <a href="#" class="font-medium text-blue-600 hover:underline">Daftar di sini</a>
                </p>

            </form>
        </div>

    </div>
<?php }
