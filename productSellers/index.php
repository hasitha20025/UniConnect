<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Deshboard</title>
    <link rel="shortcut icon" href="./picuters/logo/2-b.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/main.css" />
</head>

<body>

    <div class="container-fluid">
        <!-------------------------------------------------------------------------------------------->
        <div class=""> <!--top nav bar-->

            <nav class="navbar fixed-top " style=>
                <div class="container-fluid bg-body-tertiary shadow p-2 mb-1 bg-body-tertiary rounded">

                    <a class="navbar-brand" href="./admin-index.html">
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
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                id="nav-bar" aria-labelledby="offcanvasScrollingLabel">

                <div class="d-flex flex-column  px-3 " style="width: 400px;">
                    <div class="offcanvas-header">
                        <div class="row py-1 px-0 ">

                            <div class="col-auto py-1">
                                <a href="./admin-profile.html"
                                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                                    <img src="./picuters/profile-pic/p-1.jpg" class="rounded-circle" alt="" width="60"
                                        height="60">
                                </a>
                            </div>
                            <div class="col-auto py-1">
                                <div class="row">
                                    <span class="fs-4 px-2">
                                        <h5>Hasitha Dhananjaya </h5>
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



                        <li>
                            <a href="./admin-index.html" class="nav-link  them-color ">
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
                            <a href="./admin-products.html" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                                Products
                            </a>
                        </li>


                        <li>
                            <a href="./admin-products.html" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                  </svg>
                                Products Oders
                            </a>
                        </li>
                        
                
                        <li>
                            <a href="./admin-profile.html" class="nav-link link-body-emphasis ">
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
                            <a href="./admin-login_page.html">
                                <button type="button" class="btn btn-primary">Log Out</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------------------------------------------------------------------->



    <br />
    <br />
    <br />
    <br />
    <br />

    <div class="container-fluid">

        <div class="row">

            <div class="col-6">
                <h5 class="px-4 mt-3">Orders</h5>
                
                <div class="col-10">
                    <div class="container">
                       <a href="./admin-product-orders.html" class="nav-link">
                        <div class="row border border-1 rounded shadow bg-body rounded">
                            <div class="col-auto p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                    class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                            </div>
                            <div class="col-auto py-4">
                                <p>Orders</p>
                                <p>5</p>
                            </div>
                        </div>
                      </a>
                    </div>
                </div>
                
            </div>
            
            
            <div class="col-6">
                <h5 class="px-4 mt-3"> Products</h5>
                
                <div class="col-10">
                    <div class="container">
                        <a href="./admin-products.html" class="nav-link">
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

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>



