<?php
function sidebar()
{
    $req = $_SERVER['REQUEST_URI'];
?>
    <aside class="fixed left-0 top-0 h-screen w-[300px] bg-white border px-5 overflow-y-auto">
        <!-- Logo -->
        <h1 class="mt-8 mb-10 text-4xl font-bold uppercase font-[cursive]">
            Readed
        </h1>

        <!-- Section: Dashboard -->
        <a href="/"
            class="flex items-center gap-3 text-base px-4 py-3 my-3 rounded-lg <?= $req === "/" ? 'bg-[#3A0CA3] text-white font-medium' : 'font-normal' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-5 h-5 color-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

            <span>Dashboard</span>
        </a>

        <!-- Section: Article -->
        <div class="mb-6">
            <h2 class="text-sm font-semibold text-gray-600 uppercase mb-4">
                Article
            </h2>
            <div class="flex flex-col gap-3">
                <a href="/create"
                    class="flex items-center gap-3 text-base px-4 py-3 rounded-lg <?= strpos($req, "create") ? 'bg-[#3A0CA3] text-white font-medium' : 'font-normal' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>Create post</span>
                </a>
                <a href="/blog"
                    class="flex items-center gap-3 text-base px-4 py-3 rounded-lg <?= strpos($req, "blog") ? 'bg-[#3A0CA3] text-white font-medium' : 'font-normal' ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span>My posts</span>
                </a>
            </div>
        </div>

        <!-- Section: Account -->
        <div class="mb-10">
            <h2 class="text-sm font-semibold text-gray-600 uppercase mb-4">
                Account
            </h2>
            <a href="/profile"
                class="flex items-center gap-3 text-base px-4 py-3 rounded-lg <?= strpos($req, "profile") ? 'bg-[#3A0CA3] text-white font-medium' : 'font-normal' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

                <span>Account setting</span>
            </a>
        </div>
    </aside>
<?php } ?>