<?php
include_once("views/components/sidebar.php");
include_once("views/components/navbar.php");
function editor($data)
{ ?>
    <!-- <form action="" method="post">
            <div id="editor"></div>
            <input type="hidden" name="postnya" id="postnya">
            <button class="mt-5 bg-blue-600 px-4 py-2 rounded text-white" type="submit" name="create_data">Submit</button>
            <button class="mt-5 border border-blue-600 px-4 py-2 rounded text-blue-600" type="submit"
                name="create_draft">Save & Draft</button>
        </form> -->
    <?php sidebar() ?>
    <section class="ml-[300px] flex-1 overflow-y-auto h-screen">
        <?php navbar("Edit Blog"); ?>
        <div class="space-y-10">
            <div class="h-[2000px]">
                <!-- Form -->
                <div class="space-y-4 p-6 rounded">
                    <form action="" method="post">
                        <!-- Title Input -->
                        <input type="text" disabled value="<?= $data['article_name'] ?>"
                            class=" w-full border-2 font-semibold border-[#d1d9e6] mb-4 rounded p-4 focus:outline-none" />

                        <!-- Rich Text Editor -->
                        <div class="border border-[#d1d9e6] rounded">
                            <div id="editor" class=""><?= $data['content'] ?></div>
                            <input type="hidden" name="postnya" id="postnya">
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-4 mt-4">
                            <button class="bg-blue-700 text-white px-6 py-2 rounded" type="submit" name="create_data">
                                Save & Publish
                            </button>
                            <button class="border border text-blue-700 px-6 py-2 rounded" type="submit" name="create_draft">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        let quill = new Quill('#editor', {
            theme: 'snow'
        });
        document.querySelector('form').addEventListener('submit', function() {
            let html = quill.root.innerHTML;
            document.getElementById('postnya').value = html;
        });
    </script>

<?php }
