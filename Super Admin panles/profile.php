<?php include('./parts/header.php') ?>
<?php include('./parts/notification.php') ?>
<?php include('./parts/navigation.php') ?>

<?php
if (isset($_GET['user_id'])) {
    $Id = $_GET['user_id'];
    $sql = "SELECT * from super_admin WHERE id = $Id";
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
?>

  <div class="container-fluid">
    <br /><br /><br /><br />

    <div class="container-fluid">
      <h5 class="px-1 mt-4">Profile</h5>

      <div class="container-fluid">
        <div class="row g-4">
          <div class="col-sm-12">
            <div class="imgcontainer text-center pb-1">
              <img src="<?php echo Config::SITEURL?>/images/admins/super_admin/<?php echo $image; ?>" width="100" height="100" alt="Avatar"
                class="avatar rounded-circle" id="profile-pic" />
            </div>
          </div>

          <div class="col-sm-6">
            <label for="profile">
              <h6>Frist Name</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> <?php echo $F_name; ?> </span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Last Name</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> <?php echo $L_name; ?> </span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Email Address</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> <?php echo $email; ?></span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="profile">
              <h6>Phone No</h6>
            </label>
            <div class="border border-1 rounded-2 p-2">
              <span> <span> <?php echo $phone; ?> </span> </span>
            </div>
          </div>
          <div class="col-sm-12 text-center">
                <a href="<?php echo Config::SITEURL?>/Super Admin panles/edit_profile.php?user_id=<?php echo $_SESSION['user_id']; ?>">
                    <button class="btn btn-primary" type="button">
                        Edit Profile
                    </button>
                </a>
            </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>