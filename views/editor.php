<?php

function editor($data)
{ ?>
    <style>
        h1 {
            font-size: 2em;
            /* Ukuran standar h1 */
            font-weight: bold;
            display: block;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
        }
    </style>
    <!-- Include stylesheet -->
    <!-- Create the editor container -->
    <div class="w-2/3 mx-auto mt-10">
        <h1><?= $data['article_name'] ?></h1>
        <!-- <img src="/<?= $data['image_url'] ?>" class="aspect-video object-cover" alt=""> -->
        <form action="" method="post">
            <div id="editor"><?= $data['content'] ?></div>
            <!-- Hidden input to store the editor content -->
            <input type="hidden" name="postnya" id="postnya">
            <button class="mt-5 bg-blue-600 px-4 py-2 rounded text-white" type="submit" name="create_data">Submit</button>
            <button class="mt-5 border border-blue-600 px-4 py-2 rounded text-blue-600" type="submit"
                name="create_draft">Save & Draft</button>
        </form>
    </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        let quill = new Quill('#editor', {
            theme: 'snow'
        });

        // Submit handler to set the hidden input value with editor content
        document.querySelector('form').addEventListener('submit', function() {
            let html = quill.root.innerHTML;
            document.getElementById('postnya').value = html; // Assign editor content to hidden input
        });
    </script>

<?php }
