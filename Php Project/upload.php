<?php
if (isset($_POST['upload'])) {
    // Directory to save uploaded images
    $uploadDirectory = 'uploads/';

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Array to hold names of successfully uploaded images
    $imageNames = [];

    // Loop through all uploaded files
    foreach ($_FILES['images']['name'] as $key => $imageName) {
        $targetFile = $uploadDirectory . basename($imageName);
        $fileTmpName = $_FILES['images']['tmp_name'][$key];

        // Check if the file is an image (basic validation)
        if (getimagesize($fileTmpName)) {
            // Move the uploaded image to the server directory
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                // Add the image name to the array
                $imageNames[] = $imageName;
            }
        }
    }

    // Save image file names to a text file
    if (!empty($imageNames)) {
        $textFile = 'image_filenames.txt';
        $file = fopen($textFile, 'a'); // Open file in append mode
        foreach ($imageNames as $image) {
            fwrite($file, $image . PHP_EOL);
        }
        fclose($file);

        echo "<p>Image filenames have been saved to <a href='$textFile'>$textFile</a>.</p>";
    } else {
        echo "<p>No valid images uploaded.</p>";
    }
}
?>
