<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];
        $image_name = $image["name"];
        $image_tmp_name = $image["tmp_name"];
        $image_size = $image["size"];
        $image_error = $image["error"];

        if ($image_error === 0) {
            $image_type = explode("/", $image["type"]);
            if ($image_type[0] === "image") {
        
                $upload_dir = "D:\downloaded\uploaded";
                $image_path = $upload_dir . $image_name;
                move_uploaded_file($image_tmp_name, $image_path);

                echo "Image uploaded successfully!";
            } else {
                echo "Please upload a valid image file.";
            }
        } else {
            echo "Error uploading image file.";
        }
    }
}
?>