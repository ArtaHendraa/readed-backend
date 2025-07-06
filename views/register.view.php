<?php
function register($status = [])
{ ?>
    <?php
    ?>
    <div class="bg-white min-h-screen flex items-center justify-center px-4">
        <div class="p-4 text-sm rounded-lg absolute top-80  <?= !isset($status) ? 'hidden' : 'block' ?> <?= $status['Status'] ? 'text-green-800 border border-green-300 bg-green-50' : 'text-red-800 border border-red-300 bg-red-50' ?>"
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
        <main class="w-full max-w-xs text-center">
            <h1
                class="text-3xl text-black mb-2 select-none"
                style="font-family: 'Fredericka the Great', cursive">
                Readed
            </h1>
            <h2 class="font-extrabold text-black text-lg mb-1">Create an account</h2>
            <p class="text-[10px] mb-4 text-gray-600">
                Already have an account?
                <a href="#" class="text-blue-600 hover:underline">Sign in</a>
            </p>
            <form class="space-y-4" method="POST">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input
                        type="text" id="username" name="username"
                        placeholder="Username"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        autocomplete="username"
                        required />
                </div>
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input
                        type="email" id="email" name="email"
                        placeholder="Email"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        autocomplete="email"
                        required />
                </div>
                <div class="relative">
                    <label for="password" class="sr-only">Password</label>
                    <input
                        type="password" id="password" name="password" placeholder="Password Minimal 8 karakter"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 pr-8 text-xs placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        autocomplete="new-password"
                        required
                        aria-label="Password" />
                    <i
                        class="fas fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs cursor-pointer"
                        onclick="togglePasswordVisibility()"
                        aria-hidden="true"></i>
                </div>
                <label
                    class="flex items-center space-x-1 text-[10px] text-gray-600 mb-2">
                    <input
                        id="terms" name="terms" type="checkbox"
                        class="w-3 h-3 border border-gray-400 rounded-sm"
                        required />
                    <span>Terms of Use Agreement and a Privacy Policy</span>
                </label>
                <button
                    type="submit" name="registerBtn"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white text-[12px] font-semibold rounded-md py-2 shadow-md transition">
                    Sign up
                </button>
            </form>
        </main>

        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById("password");
                const toggleIcon = document.querySelector(".fas");
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    toggleIcon.classList.remove("fa-eye-slash");
                    toggleIcon.classList.add("fa-eye");
                } else {
                    passwordInput.type = "password";
                    toggleIcon.classList.remove("fa-eye");
                    toggleIcon.classList.add("fa-eye-slash");
                }
            }
        </script>
    </div>
<?php }
