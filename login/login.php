<?php
include('/xampp/htdocs/UniConnect/config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect login</title>
    <link rel="shortcut icon" href="../Super Admin panles/parts/logo/2-b.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Super Admin panles/css/main.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="modal modal-sheet position-static d-block p-4 mt-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-4 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-4 fs-2">Log in</h1>
                    </div>

                    <div class="modal-body p-5 pt-0">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit" name="submit">Log in</button>
                        <p class="text-body-secondary">
                            You agree to the terms of use.
                        </p>
                        <p>
                            You don't have an account? <a class="them-color" href="<?php echo Config::SITEURL?>/sign_up/sign_up.php">Sign Up</a>
                        </p>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
<?php 
if (isset($_POST["submit"])) {

//process for login system,
//1.0 get data from form;


$email = $_POST["email"];
$password = $_POST["password"];

//sql for check username and password are match in database data;


$sql = "SELECT id, email, password, role_id FROM super_admin WHERE email = '$email' 
UNION 
SELECT id, email, password, role_id FROM club_president WHERE email = '$email' 
UNION 
SELECT id, email, password, role_id FROM faculty_admins WHERE email = '$email' 
UNION 
SELECT id, email, password, role_id FROM products_sellers WHERE email = '$email' 
UNION 
SELECT id, email, password, role_id FROM services_owners WHERE email = '$email'
UNION 
SELECT id, email, password, role_id FROM tbl_users WHERE email = '$email'";

//RUN this quary
$result = $conn->query($sql);

//
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    // Verify password

    if ($password == $row['password']) {
        // Store user information in session
        $_SESSION['user_id'] =  $row['id'];
        $_SESSION['username'] = $row['email'];
        $_SESSION['role'] = $row['role_id'];



        // Redirect based on user role
        if ($row['role_id'] == 1) { // Role ID 1 represents admin
          header("Location: " . Config::SITEURL . "Super Admin panles/index.php?user_id=" . $_SESSION['user_id']);


        } else if ($row['role_id'] == 2) { // Role ID 2 represents student
            header("Location: " . Config::SITEURL . "Super Admin panles/index.php?user_id=" . $_SESSION['user_id']);
        } else if ($row['role_id'] == 3) { // Role ID 3 represents lecture
            header("Location:/APMS-newV2.00/Lectures_panel/index.php?user_id=" . $_SESSION['user_id']);
        }
        exit();
    } else {
        $_SESSION['error'] = "username or password are wrong.";
    }
} else {
    $_SESSION['error'] = " user not found";
}

// Redirect back to login page if login fails
header("Location:index.php");
exit();
}


?>
