<?php

include("./parts/top_navbar.php");
include("./parts/offcanvas.php");

if (!isset($_SESSION['user_id'])) {
            header("Location: " . Config::SITEURL . "UnionAdminpanles/index.php");
            exit();
        }

        $user_id = $_SESSION['user_id'];

?>

    <div class="container-fluid">
      

      <div class="container-fluid">
        <h5 class="px-1 mt-1 py-3">Services Dashboard</h5>

        <div class="text-end py-2">
          <a href="./add-Services-form.html">
            <button type="button" class="btn btn-primary px-3 py-2">
              + Add Services
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th scope="col">ID</th>
                <th scope="col">Services Picture</th>
                <th scope="col">Services Title</th>
                <th scope="col">Services Category</th>
                <th scope="col">Date</th>
                <th scope="col">Services Descriptions</th>
                <th scope="col">Prise ($)</th>
                <th scope="col">View(Show or Hidden)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                <td>ID1001</td>
                <td>
                  <img
                    src="./picuters/samples/s-1.png"
                    alt=""
                    width="100"
                    height="100%"
                  />
                </td>
                <td>Title</td>
                <td>Services category</td>
                <td>2023/12/25</td>
                <td>Descriptions</td>
                <td>99.99</td>
                <td>
                    <div class="form-check form-switch">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                      />
                      <label
                        class="form-check-label"
                        for="flexSwitchCheckDefault"
                      ></label>
                    </div>
                </td>
                <td>
                  <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic outlined example"
                  >
                    <button type="button" class="btn btn-outline-warning">
                      Edit
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                      Delete
                    </button>
                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">001</th>
                <td>ID1001</td>
                <td>
                  <img
                    src="./picuters/samples/s-2.png"
                    alt=""
                    width="100"
                    height="100%"
                  />
                </td>
                <td>Title</td>
                <td>Services category</td>
                <td>2023/12/25</td>
                <td>Descriptions</td>
                <td>99.99</td>
                <td>
                    <div class="form-check form-switch">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                      />
                      <label
                        class="form-check-label"
                        for="flexSwitchCheckDefault"
                      ></label>
                    </div>
                </td>
                <td>
                  <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic outlined example"
                  >
                    <button type="button" class="btn btn-outline-warning">
                      Edit
                    </button>
                    <button type="button" class="btn btn-outline-danger">
                      Delete
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
