<?php include('./parts/header.php') ?>
<?php

if (!isset($_SESSION['user_id'])) {
            header("Location: " . Config::SITEURL . "Super Admin panles/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

?>



<?php include('./parts/notification.php') ?>
<?php include('./parts/navigation.php') ?>




    <!-------------------------------------------------------------------------------------------------------------------------------------------------->

  


    <br />
    <br />
    <br />
    <br />

    <div class="container-fluid">

        <div class="row">
            <div class="col-9 ">
                <div class="row ">
                    <h5 class="px-4 ">Deshboard</h5>
                    <?php //echo Config::SITEURL; ?>
                    
                        <div class="col-3 ">                       
                            <div class="container  ">
                                <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin_news.php" class="nav-link">
                                <div class="row border border-1 rounded  shadow bg-body rounded">
                                    <div class="col-auto py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-stickies-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5" />
                                            <path
                                                d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z" />
                                        </svg>
                                    </div>
                                    <div class="col-auto">
                                        <p>News</p>
                                        <p>5</p>
                                    </div>
                                </div>
                            </a>
                          </div>
                        </div>
                   
                    
                    <div class="col-2 gx-5">
                        <div class="container">
                            <a href="<?php echo Config::SITEURL; ?>Super Admin panles/Events.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                                    </svg>

                                </div>
                                <div class="col-auto">
                                    <p>Events</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-auto gx-5">
                        <div class="container">
                        <a href="<?php echo Config::SITEURL; ?>Super Admin panles/Reminders.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Reminders</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                       </div>
                    </div>
                    <div class="col-auto gx-5">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin_feedbacks.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-wechat" viewBox="0 0 16 16">
                                        <path
                                            d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.324.324 0 0 0-.12.366l.218.81a.616.616 0 0 1 .029.117.166.166 0 0 1-.162.162.177.177 0 0 1-.092-.03l-1.057-.61a.519.519 0 0 0-.256-.074.509.509 0 0 0-.142.021 5.668 5.668 0 0 1-1.576.22ZM9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.615.615 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.627.627 0 0 0 .098.356" />
                                        <path
                                            d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.499.499 0 0 0-.032.14.192.192 0 0 0 .193.193c.039 0 .077-.01.111-.029l1.268-.733a.622.622 0 0 1 .308-.088c.058 0 .116.009.171.025a6.83 6.83 0 0 0 1.625.26 4.45 4.45 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02.05 0 .1 0 .15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826m4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0m3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Feedback</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-auto gx-5">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/notifications.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73M10 15a2 2 0 1 1-4 0zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Notifications</p>
                                    <p>5</p>
                                </div>
                            </div>
                         </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="px-4 mt-3">Sell Items</h5>
                    <div class="col-4">
                        <div class="container">
                        <a href="<?php echo Config::SITEURL; ?>Super Admin panles/Ticket/tickets.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Tickets</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                            <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-products.html" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Products</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-services.html" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                                        <path
                                            d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Services</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>

                <div class="row">
                    <h5 class="px-4 mt-3">Orders</h5>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-tickets-orders.html" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Tickets</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                           <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-product-orders.html" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Products</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                           <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-services-orders.html" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                                        <path
                                            d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Services</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="px-4 mt-4">Users</h5>
                    <div class="col-4">

                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/all_users.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>All Users</p>
                                    <p>500</p>
                                </div>
                            </div>
                          </a>  
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/all_admin.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-workspace" viewBox="0 0 16 16">
                                        <path
                                            d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        <path
                                            d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>All Admins</p>
                                    <p>20</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-admins.html #Faculty Admins" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded my-0">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Faculty Admins</p>
                                    <p>20</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-admins.html #Club President" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded my-2">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-video3" viewBox="0 0 16 16">
                                        <path
                                            d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2z" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Club President</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-admins.html #Services Owners" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded my-2">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-fill-check" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path
                                            d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Services Owners</p>
                                    <p>5</p>
                                </div>
                            </div>
                         </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/admin-admins.html #Products Sellers" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded my-2">
                                <div class="col-auto py-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-person-fill-check" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path
                                            d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4" />
                                    </svg>
                                </div>
                                <div class="col-auto">
                                    <p>Products Sellers</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>  
                        </div>
                    </div>
                </div>


            </div>


            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <h5 class="mt-2">Calender</h5>
                            <iframe
                                src="https://calendar.google.com/calendar/embed?height=300&wkst=2&bgcolor=%23ffffff&ctz=UTC&showTitle=0&mode=MONTH&showCalendars=1&showPrint=0&showNav=0&showTabs=0&title=Event&showTz=0&showDate=1&src=aGFzaXRoYS5zb2Z0LmxrQGdtYWlsLmNvbQ&src=ZW4ubGsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%230B8043"
                                style="border:solid 1px #777" width="350" height="300" frameborder="0"
                                scrolling="no">
                            </iframe>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="container">
                            <h5 class="px-1 mt-4">Today Updates</h5>
                            <div>
                                <div
                                  id="carouselExampleInterval"
                                  class="carousel slide"
                                  data-bs-ride="carousel"
                                >
                                  <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                      <a href="##">
                                        <img
                                          src="./picuters/samples/b-1.png"
                                          class="d-block w-100"
                                          width="100"
                                          height="100%"
                                          alt="..."
                                        />
                                      </a>
                                    </div>
                                    <div class="carousel-item active" data-bs-interval="2000">
                                      <a href="##">
                                        <img
                                          src="./picuters/samples/b-2.png"
                                          class="d-block w-100"
                                          width="100"
                                          height="100%"
                                          alt="..."
                                        />
                                      </a>
                                    </div>
                                    <div class="carousel-item active" data-bs-interval="2000">
                                      <a href="##">
                                        <img
                                          src="./picuters/samples/b-3.png"
                                          class="d-block w-100"
                                          width="100"
                                          height="100%"
                                          alt="..."
                                        />
                                      </a>
                                    </div>
                                  </div>
                                  <button
                                    class="carousel-control-prev"
                                    type="button"
                                    data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="prev"
                                  >
                                    <span
                                      class="carousel-control-prev-icon"
                                      aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden">Previous</span>
                                  </button>
                                  <button
                                    class="carousel-control-next"
                                    type="button"
                                    data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="next"
                                  >
                                    <span
                                      class="carousel-control-next-icon"
                                      aria-hidden="true"
                                    ></span>
                                    <span class="visually-hidden">Next</span>
                                  </button>
                                </div>
                              </div>


                        </div>
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

