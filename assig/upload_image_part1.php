<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Upload an image:</label>
        <input type="file" name="file" id="file" accept="image/*" required><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
