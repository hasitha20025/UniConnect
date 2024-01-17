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