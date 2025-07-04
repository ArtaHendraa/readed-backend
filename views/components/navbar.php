<?php
function navbar()
{ ?>
<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <div class="flex items-center">
                <a href="/" class="flex-shrink-0 text-xl font-bold text-blue-500">
                    ReadedLite
                </a>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/dashboard"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="/create"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Create</a>
                        <a href="/blog"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">List</a>
                        <a href="/category"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Category</a>
                        <a href="/profile"
                            class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Profile</a>
                    </div>
                </div>
            </div>

            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 space-x-2">
                    <a href="/login"
                        class="text-gray-700 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <a href="/register"
                        class="bg-blue-500 text-white hover:bg-blue-600 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                    <a href="/logout"
                        class="bg-red-500 text-white hover:bg-red-600 px-3 py-2 rounded-md text-sm font-medium">logout</a>
                </div>
            </div>


        </div>
    </div>

</nav>
<?php } ?>