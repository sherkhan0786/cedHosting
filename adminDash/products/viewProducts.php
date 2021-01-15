<?php include_once 'Product.php' ?>
<?php include 'sidebar.php' ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
<?php include 'header.php' ?>

    
    <!-- Page Header -->

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Admin Panel</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Products</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Page main created content -->
    <!-- <div class="container mt--7 pb-5 bg-light" > -->
      <!-- Form for hosting -->
      <!-- <div class="row justify-content-center bg-light">
        <div class="col-lg-6 col-md-8 bg-white p-4">
        <form action="" method="post">
        <h3 class="navbar-heading p-0 text-muted text-center">
            <span class="docs-normal">CREATE HOSTING CATEGORY</span>
          </h3>
          <hr class="my-3">
          <div class="mb-3">
            <label class="form-label">Hosting</label>
            <input type="text" class="form-control" value="Hosting" disabled>
          </div>
          <div class="mb-3">
            <label class="form-label">Create Category</label>
            <input name="category" type="text" class="form-control">
          </div>
          <textarea name="link" class='mb-3' name="textArea" id="textArea" cols="20" rows="10"></textarea>
          <button name="submit" type="submit" class="btn btn-block btn-primary mt-3">Create</button>
        </form>
        </div>
      </div> -->



<div class="table-responsive">
      <table class="table bg-white mt-5" id="myTable">
        <thead>
          <tr>
            <th>Product Parent Name</th>
            <th></th>
            <th>Product Name</th>
            <th></th>
            <th>Link</th>
            <th></th>
            <th>Product Availability</th>
            <th></th>
            <th>Prod Launch Date</th>
            <th></th>
            <th>Monthly Price</th>
            <th></th>
            <th>Annual Price</th>
            <th></th>
            <th>SKU</th>
            <th></th>
            <th>Webspace</th>
            <th></th>
            <th>Bandwidth</th>
            <th></th>
            <th>Free Domain</th>
            <th></th>
            <th>Language Technology</th>
            <th></th>
            <th>Mailbox</th>
            <th></th>
            <th class="text-danger">Action</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $view1 = new Product();
          $view2 = new Product();

          $ProdData=$view1->viewProdQuery();
          // $DescData=$view2->selectQuery();

          if($ProdData!=false){
            foreach($ProdData as $key=>$val){
              $decode = json_decode($val['description'], true);
              // echo "<pre>";
              // print_r($decode);
              // echo "</pre>";

              echo "<tr>";
              echo "<td>".$val['prod_name']."<td>";
              echo "<td>".$val['prod_name']."<td>";
              echo "<td>".$val['link']."<td>";
              echo "<td>".$val['prod_available']."<td>";
              echo "<td>".$val['prod_launch_date']."<td>";
              echo "<td>".$val['mon_price']."<td>";
              echo "<td>".$val['annual_price']."<td>";
              echo "<td>".$val['sku']."<td>";
              echo "<td>".$decode['webSpace']."<td>";
              echo "<td>".$decode['bandwidth']."<td>";
              echo "<td>".$decode['domain']."<td>";
              echo "<td>".$decode['support']."<td>";
              echo "<td>".$decode['mailbox']."<td>";
              echo "<td><button data-toggle='modal' data-id="./*$val['id'].*/" data-target='#myModal' class='btn btn-info'>Edit</button>";
              echo "<a href='delCategory.php?id=$val[id]'><button type='submit' class='btn btn-danger'>Delete</button></a><td>";
              echo "</tr>";
            }
            // echo "<pre>";
            // print_r($ProdData);
          }
          ?>
        </tbody>
      </table>
</div>

<!-- table display -->
<div class="col-md-4">
    <!-- Modal -->
    
  </div>
</div>
    


<?php include 'footer.php' ?>


<?php
//   include 'dbConn.php';
//   if(isset($_POST['submit'])){
//     $category = $_POST['category'];
//     $link = $_POST['link'];

//     $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`) VALUES (0, '$category', '$link', 1)";

//     if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
//     } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
//   }
?>

