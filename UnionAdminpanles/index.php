<?php

include("./parts/top_navbar.php");
include("./parts/offcanvas.php");

if (!isset($_SESSION['user_id'])) {
            header("Location: " . Config::SITEURL . "UnionAdminpanles/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

?>


    <br />

    <div class="container-fluid">

        <div class="row">
            <div class="col-9 ">
                <div class="row ">
                    <h5 class="px-4 ">Deshboard</h5>
                    
                        <div class="col-3 ">                       
                            <div class="container  ">
                                <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/news.php" class="nav-link">
                                <div class="row border border-1 rounded  shadow bg-body rounded">
                                    <div class="col-auto p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                            class="bi bi-stickies-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5" />
                                            <path
                                                d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z" />
                                        </svg>
                                    </div>
                                    <div class="col-auto py-3">
                                        <p>News</p>
                                        <p>5</p>
                                    </div>
                                </div>
                            </a>
                          </div>
                        </div>
                   
                    
                    <div class="col-3 ">
                        <div class="container ">
                            <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Events.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                                    </svg>

                                </div>
                                <div class="col-auto py-3 ">
                                    <p>Events</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>

                    <div class="col-3 ">
                        <div class="container">
                        <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Reminders.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-3">
                                    <p>Reminders</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                       </div>
                    </div>


                    <div class="col-3 ">
                        <div class="container">
                        <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Notifications.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                        <path d="M5.164 14H15c-1.5-1-2-5.902-2-7q0-.396-.06-.776zm6.288-10.617A5 5 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5 5 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113zM10 15a2 2 0 1 1-4 0zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75z"/>
                                      </svg>
                                </div>
                                <div class="col-auto py-3">
                                    <p>Notifications</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                       </div>
                    </div>
        
                    

                </div>
                <br>

                <div class="row">
                    <h5 class="px-4 mt-3">Sell Items</h5>
                    <div class="col-4">
                        <div class="container">
                        <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Tickets.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-4">
                                    <p>Tickets</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                            <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Products.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-4">
                                    <p>Products</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>   
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Services.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                                        <path
                                            d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-4">
                                    <p>Services</p>
                                    <p>5</p>
                                </div>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>

                <br>

                <div class="row">
                    <h5 class="px-4 mt-3">Orders</h5>
                    <div class="col-6">
                        <div class="container">
                          <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Tickets_orders.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-4">
                                    <p>Tickets</p>
                                    <p>5</p>
                                </div>
                            </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container">
                           <a href="<?php echo Config::SITEURL; ?>UnionAdminpanles/Product_orders.php" class="nav-link">
                            <div class="row border border-1 rounded shadow bg-body rounded">
                                <div class="col-auto p-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                        class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                    </svg>
                                </div>
                                <div class="col-auto py-4">
                                    <p>Products</p>
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
                                      <a href="./events.html">
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
                                      <a href="./events.html">
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
                                      <a href="./events.html">
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