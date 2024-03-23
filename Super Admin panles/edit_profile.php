<?php
include('/xampp/htdocs/UniConnect/config/constants.php');

if (isset($_GET['user_id'])) {
    $Id = $_GET['user_id'];
    $sql = "SELECT * FROM super_admin WHERE id = $Id";
    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $image = $rows["image"];
                $F_name = $rows["F_name"];
                $L_name = $rows["L_name"];
                $email = $rows["email"];
                $phone = $rows["phone"];
                $password = $rows["password"];
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    // Assuming you have the user_id in the URL
    $Id = $_GET['user_id'];

    if (isset($_FILES['fileInput']['name'])) {
        $image_name = $_FILES['fileInput']['name'];

        if ($image_name != "") {
            $ext = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_name = "super_admin" . rand(0000, 9999) . '.' . $ext;

            $source_path = $_FILES['fileInput']['tmp_name'];
            $destination_path = "/xampp/htdocs/UniConnect/images/admins/super_admin/" . $image_name;

            move_uploaded_file($source_path, $destination_path);
        } else {
            // Image not available, use the previous image name
            $image_name = $image;
        }
    } else {
        // If no image is uploaded, use the previous image name
        $image_name = $image;
    }

    $F_name = $_POST['f_name'];
    $L_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // SQL query to update the user profile
    $sql = "UPDATE super_admin SET
            F_name = '$F_name',
            L_name = '$L_name',
            email = '$email',
            phone = '$phone',
            image = '$image_name'
            WHERE id = $Id";

    $res = mysqli_query($conn, $sql);

    if ($res == TRUE) {
        $_SESSION['success'] = "Profile updated successfully";
        header("Location: " . Config::SITEURL . "Super Admin panles/index.php?user_id=" . $Id);
        exit();
    } else {
        $_SESSION['error'] = "Failed to update profile";
        // header("Location: " . Config::SITEURL . "Super Admin panles/edit_profile.php?user_id=" . $Id);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect edit profile</title>
    <link rel="shortcut icon" href="./picuters/logo/2-b.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="modal modal-sheet position-static d-block p-0 my-2" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-4 pb-0 border-bottom-0">
                        <h2 class="fw-bold mb-0 fs-2 ps-3">Edit Profile</h2>
                    </div>
                    <div class="modal-body p-4 pt-0">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="imgcontainer text-center pb-1">
                            <img src="<?php echo Config::SITEURL?>/images/admins/super_admin/<?php echo $image; ?>" width="100" height="100" alt="Avatar" class="avatar rounded-circle" id="profile-pic" />
                            </div>
                            <div class="text-center mt-2 mb-2">
                                <label for="fileInput" class="custom-file-upload">
                                    <span>Update profile</span>
                                    <input type="file" id="fileInput" name="fileInput" />
                                </label>
                            </div>
                            <div class="row">
                                <div class="row row-cols-2">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-3" id="floatingInput" name="f_name" placeholder="f-name" required value="<?php echo $F_name; ?>" />
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-3" id="floatingInput" name="l_name" placeholder="l-name" required value="<?php echo $L_name; ?>" />
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-2">
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control rounded-3" id="floatingInput" name="email" placeholder="name@example.com" required value="<?php echo $email; ?>" />
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control rounded-3" id="floatingInput" name="phone" placeholder="phone-no" value="<?php echo $phone; ?>" />
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-body-secondary">You agree to the terms of use.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>
