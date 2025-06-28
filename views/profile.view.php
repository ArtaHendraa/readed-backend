<?php
function profil($user_data, $status)
{ ?>
<div class="max-w-xl mx-auto space-y-8">

    <div class="text-center">
        <h1 class="text-3xl font-bold text-gray-800">Pengaturan Akun</h1>
        <p class="text-gray-500">Perbarui informasi profil dan password Anda di sini.</p>
    </div>

    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg">
        <h2 class="text-xl font-bold text-gray-800 border-b pb-4 mb-6">Informasi Akun</h2>
        <form method="post">
            <div class="space-y-6">
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                    <input type="text" disabled id="username" name="username"
                        value="<?= htmlspecialchars($user_data['username']) ?>"
                        class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" disabled id="email" name="email"
                        value="<?= htmlspecialchars($user_data['email']) ?>"
                        class="w-full px-4 py-2 text-gray-700 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
        </form>
    </div>

    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg">
        <?php
            if (!empty($status)) {
                echo $status['Msg'];
            }
            ?>
        <h2 class="text-xl font-bold text-gray-800 border-b pb-4 mb-6">Ubah Password</h2>
        <form method="post">
            <div class="space-y-6">
                <div>
                    <label for="current_password" class="block mb-2 text-sm font-medium text-gray-700">Password Saat
                        Ini</label>
                    <input type="password" id="current_password" name="current_password"
                        class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="new_password" class="block mb-2 text-sm font-medium text-gray-700">Password Baru</label>
                    <input type="password" id="new_password" name="new_password"
                        class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-700">Konfirmasi
                        Password Baru</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                        class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" name="changePasswordBtn"
                    class="px-6 py-2 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700">Ubah
                    Password</button>
            </div>
        </form>
    </div>

</div>
<?php }
?>