<?php
include('/xampp/htdocs/UniConnect/config/constants.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UniConnect Add Products Details</title>
    <link
      rel="shortcut icon"
      href="./picuters/logo/2-b.png"
      type="image/x-icon"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div
        class="modal modal-sheet position-static d-block p-4 mt-5"
        tabindex="-1"
        role="dialog"
        id="modalSignin"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
              <h2 class="fw-bold mb-4 fs-2">Add Products Details</h2>
            </div>

            <div class="modal-body p-5 pt-0">


            <form method="POST" action="handle_product_submission.php" enctype="multipart/form-data">
            <div class="row gx-4 gy-3">
                <div class="col-sm-12">
                    <label for="productSellerID" class="form-label">Select Seller</label>
                    <select class="form-select" id="productSellerID" name="productSellerID" required>
                    <option value="" selected>Select your seller</option>
                        <?php
                        // Fetch product sellers from the database
                        $sql = "SELECT * FROM products_sellers";
                        $result = mysqli_query($conn, $sql);

                        // Check if any rows were returned
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo '<option value="' . $row['id'] . '">' . $row['F_name'] . ' ' . $row['L_name'] . '</option>';
                            
                        }
                        } else {
                            echo '<option value="" disabled>No sellers found</option>';
                        }
                        ?>
                    </select>
                </div>

        <div class="col-sm-12">
            <label for="productPicture" class="form-label">Products Picture</label>
            <input type="file" class="form-control" name="productPicture" id="productPicture" required accept="image/*" />
        </div>
        <div class="col-sm-12">
            <label for="productTitle" class="form-label">Products Title</label>
            <input type="text" class="form-control" id="productTitle" name="productTitle" placeholder="News Title" required />
        </div>
        <div class="col-sm-12">
            <label for="productCategory" class="form-label">Products Category</label>
            <input type="text" class="form-control" id="productCategory" name="productCategory" placeholder="Products Category" required />
        </div>
        <div class="col-sm-6">
            <label for="productDate" class="form-label">Date & Time</label>
            <input type="date" class="form-control" name="productDate" id="productDate" required />
        </div>
        <div class="col-sm-6">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" class="form-control" name="productPrice" id="productPrice" placeholder="99.99" required />
        </div>
        <div class="col-sm-12">
            <label for="productDescription" class="form-label">Products Description</label>
            <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
        </div>
    </div>
    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary mt-3" type="submit">Add Product</button>
</form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
