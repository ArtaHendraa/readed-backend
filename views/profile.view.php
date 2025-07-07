<?php
include_once("views/components/sidebar.php");
include_once("views/components/navbar.php");
function profil($user_data, $status)
{ ?>
    <main class="flex h-screen">
        <?php sidebar() ?>
        <section class="ml-[300px] flex-1 overflow-y-auto h-screen">
            <?php navbar("Profile") ?>
            <div class="p-6">
                <?php
                if (!empty($status)) {
                    echo $status['Msg'];
                }
                ?>
                <form id="profile-form" action="" method="post"
                    class="w-full border border-[#d1d9e6] rounded-md p-6 space-y-6 bg-white">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4">
                        <div>
                            <label for="username" class="block text-sm font-semibold text-black mb-1">Username</label>
                            <input id="username" type="text" placeholder="Username" readonly
                                value="<?= htmlspecialchars($user_data['username']) ?>"
                                class="w-full border border-[#d1d9e6] rounded-md px-3 py-2 text-xs text-[#a8b0c1] placeholder-[#a8b0c1] focus:outline-none focus:ring-1 focus:ring-[#a8b0c1]" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-black mb-1">Email</label>
                            <input id="email" type="email" readonly value="<?= htmlspecialchars($user_data['email']) ?>"
                                class="w-full border border-[#d1d9e6] rounded-md px-3 py-2 text-xs text-[#a8b0c1] placeholder-[#a8b0c1] focus:outline-none focus:ring-1 focus:ring-[#a8b0c1]" />
                        </div>
                        <div>
                            <label for="current-password" class="block text-sm font-semibold text-black mb-1">Change
                                password</label>
                            <input id="current-password" type="password" placeholder="Current password"
                                name="current_password"
                                class="w-full border border-[#d1d9e6] rounded-md px-3 py-2 text-xs text-[#a8b0c1] placeholder-[#a8b0c1] focus:outline-none focus:ring-1 focus:ring-[#a8b0c1]" />
                        </div>
                    </div>
                    <div class="flex gap-12">
                        <input id="new-password" type="password" placeholder="New password" name="new_password"
                            class="w-full border border-[#d1d9e6] rounded-md px-3 py-2 text-xs text-[#a8b0c1] placeholder-[#a8b0c1] focus:outline-none focus:ring-1 focus:ring-[#a8b0c1]" />
                        <input id="confirm-password" type="password" placeholder="Confirm password" name="confirm_password"
                            class="w-full border border-[#d1d9e6] rounded-md px-3 py-2 text-xs text-[#a8b0c1] placeholder-[#a8b0c1] focus:outline-none focus:ring-1 focus:ring-[#a8b0c1]" />
                    </div>
                    <div class="max-w-4xl w-full mt-6">
                        <button type="submit" name="changePasswordBtn"
                            class="bg-[#2a2aff] text-white text-sm font-semibold px-5 py-2 rounded-md">
                            Save
                        </button>
                        <a href="/logout" class="bg-red-500 text-white text-sm font-semibold px-5 py-2 rounded-md">
                            Logout
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?php }
?>