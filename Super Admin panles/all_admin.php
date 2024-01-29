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

    <div class="container-fluid">
      <br />
      <br />
      <br />
      <br />

      <div class="container-fluid">
        <h5 class="px-1 mt-4 py-3">Admins Dashboard</h5>

        <div class="text-end py-2">
          <a href="<?php echo Config::SITEURL; ?>Super Admin panles/add_admins.php">
            <button type="button" class="btn btn-primary px-3 py-2">
              + Add Admins
            </button>
          </a>
        </div>
                   
       <div class="container-fluid" id="Faculty Admins">


        
        <h5>Faculty Admins</h5>
        <br>
        <table class="table table-hover table-borderless table-sm caption-top table-responsive">
          <thead>
            <tr>
              <th scope="col">#No</th>
              <th>Profile pic</th>
              <th scope="col">F-Name</th>
              <th scope="col">L-Name</th>
              <th scope="col">Mobile No</th>
              <th scope="col">Email</th>
              <th>password</th>
              <th>Role</th>
              <th scope="col">Access(Active or Disable)</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">001</th>
              <td>
                <img
                  src="./picuters/profile-pic/p-1.jpg"
                  alt=""
                  class="rounded-circle"
                  width="50"
                  height="100%"
                />
              </td>
              <td>Hasitha</td>
              <td>Dhananjaya</td>
              <td>0763094665</td>
              <td>hasitha@gmail.com</td>
              <td>********</td>
              <td>Role</td>

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












        <div class="container-fluid" id="Club President">
          <br><br>
          <h5>Club President</h5>
          <br>
          <table class="table table-hover table-borderless table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th>Profile pic</th>
                <th scope="col">F-Name</th>
                <th scope="col">L-Name</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th>password</th>
                <th>Role</th>
                <th scope="col">Access(Active or Disable)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>

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
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>

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


        <div class="container-fluid" id="Services Owners">
          <br><br>
          <h5>Services Owners</h5>
          <br>
          <table class="table table-hover table-borderless table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th>Profile pic</th>
                <th scope="col">F-Name</th>
                <th scope="col">L-Name</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th>password</th>
                <th>Role</th>
                <th scope="col">Access(Active or Disable)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>
  
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
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>
  
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



        <div class="container-fluid" id="Products Sellers">
          <br><br>
          <h5>Products Sellers</h5>
          <br>
          <table class="table table-hover table-borderless table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>
                <th>Profile pic</th>
                <th scope="col">F-Name</th>
                <th scope="col">L-Name</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email</th>
                <th>password</th>
                <th>Role</th>
                <th scope="col">Access(Active or Disable)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>
  
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
                <td>
                  <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    class="rounded-circle"
                    width="50"
                    height="100%"
                  />
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>0763094665</td>
                <td>hasitha@gmail.com</td>
                <td>********</td>
                <td>Role</td>
  
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
