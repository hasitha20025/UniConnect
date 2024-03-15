<?php
$user_id=$_SESSION['user_id'];
// SQL query
$sql = "SELECT F_name, L_name, image FROM club_president WHERE id = $user_id";

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
            <!--nav bar-->
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
                                    <span class="active px-4  p-0 rounded-pill ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                            <path
                                                d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z" />
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                                        </svg>
                                        Club Admin
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>




                    <ul class="nav nav-pills flex-column mb-auto">



                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/index.php" class="nav-link  them-color ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-speedometer2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                    <path fill-rule="evenodd"
                                        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                                </svg>
                                Dashboard

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/news.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-stickies-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5" />
                                    <path
                                        d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z" />
                                </svg>
                                News
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Events.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                                </svg>
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Reminders.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                                Reminders
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Tickets.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                </svg>
                                Tickets
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Products.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Services.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                                    <path
                                        d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                                </svg>
                                Services
                            </a>
                        </li>

                        <li>
                            <div class="dropdown px-1 ">
                                <button class="btn  dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                    Orders
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item " href="<?php echo Config::SITEURL; ?>ClubPersident/Tickets_orders.php">Tickets Orders</a>
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo Config::SITEURL; ?>ClubPersident/Product_orders.php">Products Orders</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Notifications.php" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                </svg>
                                Notifications
                            </a>
                        </li>

                        
                        
                
                        <li>
                            <a href="<?php echo Config::SITEURL; ?>ClubPersident/Profile.php" class="nav-link link-body-emphasis ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>
                                Profile
                            </a>
                        </li>


                    </ul>


                    <div class="col-12 py-4">

                        <div class="col-12 text-center py-2">
                        <a href="#" onclick="confirmLogout()">
                        <button type="button" class="btn btn-primary">Log Out</button>
                    </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function confirmLogout() {
    // Display a confirmation dialog
    if (confirm("Are you sure you want to log out?")) {
        // If the user clicks "OK", proceed with logout
        logoutAndRedirect();
    } else {
        // If the user clicks "Cancel", do nothing
    }
}

function logoutAndRedirect() {
    


    // Redirect to the logout script (PHP script to destroy the session)
    window.location.href = "<?php echo Config::SITEURL; ?>/Super Admin panles/parts/logout.php";
}
</script>   <!-------------------------------------------------------------------------------------------------------------------------------------------------->
