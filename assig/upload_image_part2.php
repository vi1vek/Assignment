<?php

if (isset($_POST['submit']) && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxFileSize = 2 * 1024 * 1024; 
    

  
    if (!in_array($file['type'], $allowedTypes)) {
        echo "<p>Only jpg, png and gif files are allowed.</p>";
        exit;
    }
            
    if ($file['size'] > $maxFileSize) {
        echo "File size exceeds the 2MB limit.";
        exit;
    }

    $uploadDir = 'uploads/';
    $filePath = $uploadDir . basename($file['name']);
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
                

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        echo "<p>File uploaded successfully! <a href='$filePath'>View Image</a></p>";
    } else {
        echo "Failed to upload file.";
    }

}
?>
