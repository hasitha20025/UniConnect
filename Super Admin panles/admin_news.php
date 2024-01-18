<?php include('./parts/header.php') ?>
<?php include('./parts/notification.php') ?>
<?php include('./parts/navigation.php') ?>

    <div class="container-fluid">

      <br />
      <br />
      <br />
      <br />

      <div class="container-fluid">
        <h5 class="px-1 mt-4 py-3">News Dashboard</h5>

        <div class="text-end">
          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/add-news-form.html">
            <button type="button" class="btn btn-primary px-3">
               Add News
            </button>
          </a>
        </div>

        <div class="container-fluid">
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th scope="col">ID</th>
                <th scope="col">News Thumbnail</th>
                <th scope="col">News Title</th>
                <th scope="col">Date</th>
                <th scope="col">News Descriptions</th>
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
                    src="./picuters/samples/n-1.png"
                    alt=""
                    width="100"
                    height="100%"
                  />
                </td>
                <td>News Title</td>
                <td>2023/12/25</td>
                <td>Descriptions</td>
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
                <th scope="row">002</th>
                <td>ID1002</td>
                <td>
                  <img
                    src="./picuters/samples/n-2.png"
                    alt=""
                    width="100"
                    height="100%"
                  />
                </td>
                <td>News Title</td>
                <td>2023/12/25</td>
                <td>Descriptions</td>
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

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>
