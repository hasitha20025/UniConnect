<div class="container-fluid">
        <!-------------------------------------------------------------------------------------------->
        <div class=""> <!--top nav bar-->

<nav class="navbar fixed-top " style=>
    <div class="container-fluid bg-body-tertiary shadow p-2 mb-1 bg-body-tertiary rounded">

        <a class="navbar-brand" href="<?php echo Config::SITEURL; ?>productSellers/index.php?user_id=<?php echo $_SESSION['user_id']; ?>">
            <span><img src="./picuters/logo/2-b.png" width="60" height="60"></span>
            <span class="px-1">UniConnect </span>
            <span class="px-1"> </span>
        </a>

        <form class="d-flex">

            <input class="form-control me-2" type="search" placeholder="Search (ID,Names)"
                aria-label="Search">
            <button class="btn btn-primary  col-auto py-1" type="submit">Search</button>

        </form>

        <div class="row">
            <div class="col-auto py-1">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#notifictions"
                    aria-controls="notifictions"><img src="./picuters/icons/bell-fill.svg" alt="" width="20"
                        height="20"></button>

            </div>
            <div class="col-auto py-1">
                <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-bar"
                    aria-controls="nav-bar"><img src="./picuters/icons/Menu.svg" alt="" width="30"
                        height="30"></button>
            </div>

        </div>
    </div>
</nav>



<!--notifications-->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    id="notifictions" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p> </p>

        <div class="alert alert-primary" role="alert">
            A simple primary alert with <a href="#" class="alert-link">See More</a>. Give it a click if you
            like.
            <div class="text-end">
                <small><span>2023/12/27</span> <span>9:00 AM</span> </small>
            </div>

        </div>


    </div>
</div>





<!--nav bar-->
<?php
$user_id=$_SESSION['user_id'];
// SQL query
$sql = "SELECT F_name, L_name, image FROM products_sellers WHERE id = $user_id";

$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $First_Name= $row['F_name'];
        $last_Name= $row['L_name'];
        $image= $row['image'];
       
    }
} 
// Close connection




?>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    id="nav-bar" aria-labelledby="offcanvasScrollingLabel">

    <div class="d-flex flex-column  px-3 " style="width: 400px;">
        <div class="offcanvas-header">
            <div class="row py-1 px-0 ">

                <div class="col-auto py-1">
                    <a href="./admin-profile.html"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img src="<?php echo Config::SITEURL?>images/admins/other_admin/<?php echo $image?>" class="rounded-circle" alt="" width="60"
                            height="60">
                    </a>
                </div>
                <div class="col-auto py-1">
                    <div class="row">
                        <span class="fs-4 px-2">
                            <h5><?php echo $First_Name. " ".$last_Name; ?></h5>
                        </span>
                    </div>
                    <div class="row ">
                        <span class="active px-1  p-0 rounded-pill ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path
                                    d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                            </svg>
                            
                            Products Seller Admin
                        </span>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>



<ul class="nav nav-pills flex-column mb-auto">