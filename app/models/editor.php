<?php
require_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Editor - Write Your Blog</title>
    <!-- Include TinyMCE from CDN -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#blogContent',
        plugins: 'image link media code table',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image media table | code',
        image_title: true,
        automatic_uploads: true,
        file_picker_types: 'image',
        images_upload_url: '../../backend/upload.php', // Path to the PHP file handling the image uploads
        images_upload_handler: function (blobInfo, success, failure) {
          let xhr, formData;

          xhr = new XMLHttpRequest();
          xhr.withCredentials = false;
          xhr.open('POST', '../../backend/upload.php'); // The upload handler

          xhr.onload = function () {
            if (xhr.status != 200) {
              failure('HTTP Error: ' + xhr.status);
              return;
            }

            const json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
              failure('Invalid JSON: ' + xhr.responseText);
              return;
            }

            success(json.location);
          };

          formData = new FormData();
          formData.append('file', blobInfo.blob(), blobInfo.filename());

          xhr.send(formData);
        }
      });
    </script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Write Your Blog, Testimonial, or Suggestion</h2>
    
    <!-- Blog editor form -->
    <form action="../../backend/save_post.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="category" id="category" class="form-select" required>
                <option value="blog">Blog</option>
                <option value="testimonial">Testimonial</option>
                <option value="suggestion">Suggestion</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="blogContent" class="form-label">Content</label>
            <textarea id="blogContent" name="content" rows="15"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
