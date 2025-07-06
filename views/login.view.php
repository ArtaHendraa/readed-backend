<?php
function login($result)
{
    $value = "";
    if (isset($_COOKIE['username'])) {
        $value = $_COOKIE['username'];
    }
?>

    
    <div class="bg-white min-h-screen flex flex-col items-center justify-center">
        <div class="p-4 text-sm rounded-lg absolute top-80  <?= !isset($result) ? 'hidden' : 'block' ?> <?= $result['Status'] ? 'text-green-800 border border-green-300 bg-green-50' : 'text-red-800 border border-red-300 bg-red-50' ?>"
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

        <main class="w-full max-w-xs text-center">
            <h1
                class="font-fred text-3xl text-black mb-2 select-none"
                style="font-family: 'Fredericka the Great', cursive">
                Readed
            </h1>
            <h2 class="font-extrabold text-black text-lg mb-1">
                Log in to your account
            </h2>
            <p class="text-[10px] text-gray-600 mb-6">
                Don't have an account?
                <a href="#" class="text-blue-600 hover:underline">Sign up</a>
            </p>
            <form class="space-y-4" action="/login" method="POST" autocomplete="off">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Username"
                        value="<?= $value ?>"

                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-xs placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600"
                        required
                        aria-label="Username" />
                </div>
                <div class="relative">
                    <label for="password" class="sr-only">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"

                        class="w-full border border-gray-300 rounded-md px-3 py-2 pr-10 text-xs placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600"
                        required
                        aria-label="Password" />
                    <span
                        class="absolute inset-y-0 right-3 flex items-center text-gray-400 text-xs cursor-pointer select-none"
                        onclick="togglePasswordVisibility()">
                        <i id="toggle-icon" class="fas fa-eye-slash"></i>
                    </span>
                </div>
                <div class="flex justify-between text-[10px] text-gray-600 mb-2">
                    <label class="flex items-center space-x-1">
                        <input
                            type="checkbox"
                            name="remember"
                            class="w-3 h-3 border border-gray-400 rounded-sm" />
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="hover:underline">Forgot password</a>
                </div>
                <button
                    type="submit"
                    name="loginBtn"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white text-[12px] font-semibold rounded-md py-2 shadow-md transition">
                    Login
                </button>
            </form>
        </main>

        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById("password");
                const toggleIcon = document.getElementById("toggle-icon");
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
