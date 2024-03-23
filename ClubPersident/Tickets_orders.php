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
        <h5 class="px-1 mt-1 py-3">Tickets Orders Dashboard</h5>

      

        

        <div class="container-fluid">
            <h5>Tickets 01</h5>
            <br>
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>                
                <th scope="col">Ticket ID</th>
                <th scope="col">Ticket Picture</th>
                <th scope="col">Ticket Title</th>
                <th scope="col">Uint Prise($)</th>
                <th scope="col">User-pic</th>
                <th scope="col">F Name</th>
                <th scope="col">L Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Oder Count</th>
                <th scope="col">Balance($)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                
                <td>ID1001</td>
                <td>
                  <img
                    src="./picuters/samples/t-1.png"
                    alt=""
                    width="80"
                    height="100%"
                  />
                </td>
                <td>Ticket Title</td>
                <td>99.99</td>
                <td>
                    <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    width="50"
                    height="100%"
                    class="rounded-circle"
                  /> 
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>hasitha@gmail.com</td>
                <td>0763094665</td>
                <td>5</td>
                <td>500.99</td>
                           
                <td>
                  <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic outlined example"
                  >
                    <button type="button" class="btn btn-outline-primary">
                      Order Complete
                    </button>
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


        <div class="container-fluid">
            <h5>Tickets 02</h5>
            <br>
          <table class="table table-hover table-sm caption-top table-responsive">
            <thead>
              <tr>
                <th scope="col">#No</th>                
                <th scope="col">Ticket ID</th>
                <th scope="col">Ticket Picture</th>
                <th scope="col">Ticket Title</th>
                <th scope="col">Uint Prise($)</th>
                <th scope="col">User-pic</th>
                <th scope="col">F Name</th>
                <th scope="col">L Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Oder Count</th>
                <th scope="col">Balance($)</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">001</th>
                
                <td>ID1001</td>
                <td>
                  <img
                    src="./picuters/samples/t-1.png"
                    alt=""
                    width="80"
                    height="100%"
                  />
                </td>
                <td>Ticket Title</td>
                <td>99.99</td>
                <td>
                    <img
                    src="./picuters/profile-pic/p-1.jpg"
                    alt=""
                    width="50"
                    height="100%"
                    class="rounded-circle"
                  /> 
                </td>
                <td>Hasitha</td>
                <td>Dhananjaya</td>
                <td>hasitha@gmail.com</td>
                <td>0763094665</td>
                <td>5</td>
                <td>500.99</td>
                           
                <td>
                  <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic outlined example"
                  >
                    <button type="button" class="btn btn-outline-primary">
                      Order Complete
                    </button>
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
  </body>
</html>
