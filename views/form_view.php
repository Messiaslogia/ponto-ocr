<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Image</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*">
            <button type="submit">Upload</button>
        </form>
    </body>
</html>