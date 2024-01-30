if (isset($_FILES['profilePicture']['name'])) {
        $image_name = $_FILES['profilePicture']['name'];

        if ($image_name != "") {
            $ext = end(explode('.', $image_name));
            $image_name = "admins" . rand(0000, 9999) . '.' . $ext;

            $source_path = $_FILES['profilePicture']['tmp_name'];
            $destination_path = "/xampp/htdocs/UniConnect/images/admins/other_admin/" . $image_name;

            move_uploaded_file($source_path, $destination_path);
        } else {
            // Image not available, use a default image or handle as needed
            $image_name = "default_image.jpg";
        }
    } else {
        // If no image is uploaded, use a default image or handle as needed
        $image_name = "default_image.jpg";
    }