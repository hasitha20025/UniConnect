<?php 
include('/xampp/htdocs/UniConnect/config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Sign up</title>
    <link
      rel="shortcut icon"
      href="../Super Admin panles/parts/logo/2-b.png"
      type="image/x-icon"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../Super Admin panles/css/main.css" />
  </head>

  <body>
    <div class="container-fluid">
      <div
        class="modal modal-sheet position-static d-block p-0 my-2"
        tabindex="-1"
        role="dialog"
        id="modalSignin"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 pb-0 border-bottom-0">
              <h1 class="fw-bold mb-0 fs-2 ps-3">Sign up</h1>
            </div>

            <div class="modal-body p-4 pt-0">
              <form class="">
                <div class="imgcontainer text-center pb-1">
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    width="100"
                    height="100"
                    alt="Avatar"
                    class="avatar rounded-circle"
                    id="profile-pic"
                  />
                </div>

                <div class="text-center mt-2 mb-2">
                  <label for="fileInput" class="custom-file-upload">
                    <span>Update profile</span>
                    <input type="file" id="fileInput" />
                  </label>
                </div>

                <div class="row">
                  <div class="row row-cols-2">
                    <div class="col-6">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control rounded-3"
                          id="floatingInput"
                          placeholder="f-name"
                          required
                        />
                        <label for="floatingInput">Frist Name</label>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control rounded-3"
                          id="floatingInput"
                          placeholder="l-name"
                          required
                        />
                        <label for="floatingInput">Last Name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row row-cols-2">
                    <div class="col-6">
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          class="form-control rounded-3"
                          id="floatingInput"
                          placeholder="name@example.com"
                          required
                        />
                        <label for="floatingInput">Email address</label>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-floating mb-3">
                        <input
                          type="tel"
                          class="form-control rounded-3"
                          id="floatingInput"
                          placeholder="phone-no"
                          required
                          pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                        />
                        <label for="floatingInput">Phone Number</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control rounded-3"
                          id="floatingPassword"
                          placeholder="Password"
                          required
                        />
                        <label for="floatingPassword">Password</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          class="form-control rounded-3"
                          id="floatingPassword"
                          placeholder="Conform Password"
                          required
                        />
                        <label for="floatingPassword">Conform Password</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <button
                        class="w-100 mb-2 btn btn-lg rounded-3 btn-primary"
                        type="submit"
                      >
                        Sign up
                      </button>
                    </div>
                  </div>
                </div>

                <p class="text-body-secondary">
                  Sign up, you agree to the terms of use.
                </p>
                <p class="text-body-secondary">
                  You have alredy account
                  <a class="them-color" href="./login_page.html">Log in</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script src="./js/script.js"></script>
  </body>
</html>
