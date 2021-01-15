
<?php
  include_once 'Product.php';

  include 'sidebar.php';
?>
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
                  <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
    <div class="container mt--7 pb-5 bg-light" >
      <!-- Form for hosting -->
      <div class="row justify-content-center bg-light">
        <div class="col-lg-6 col-md-8 bg-white p-4">
        <form action="insertProd.php" method="post">
        <h3 class="navbar-heading p-0 text-muted text-center">
            <span class="docs-normal">CREATE NEW PRODUCT</span>
          </h3>
          <hr class="my-3">
          <div class="my-4">
            <label class="form-label">Select Product Category</label>
              <select class="form-control" name="prodCatId">
                <?php
                  $myOpt = new Product();
                  $data = $myOpt->selectQuery();
                  foreach($data as $key=>$val){
                    if($val['prod_parent_id']==1){
                      echo "<option value=".$val['id'].">".$val['prod_name']."</option>";
                    }
                  }
                ?>
              </select>
            
          </div>
          <div class="my-4">
            <label class="form-label">Enter Product Name</label>
            <input name="prodName" type="text" class="form-control">
          </div>
          <div class="my-4">
            <label class="form-label">Page Url</label>
            <input name="url" type="text" class="form-control">
          </div>

          <hr class="my-5">

          <h3 class="navbar-heading p-0 text-muted text-center">
            <span class="docs-normal">Product Description</span>
          </h3>
          <hr class="my-3">

          <div class="my-4">
            <label class="form-label">Enter Monthly price</label>
            <input name="mPrice" type="text" class="form-control">
          </div>
          <div class="my-4">
            <label class="form-label">Enter Annual price</label>
            <input name="aPrice" type="text" class="form-control">
          </div>
          <div class="my-4">
            <label class="form-label">SKU</label>
            <input name="sku" type="text" class="form-control">
          </div>

          <hr class="my-5">
          <h3 class="navbar-heading p-0 text-muted text-center">
            <span class="docs-normal">Features</span>
          </h3>
          <hr class="my-3">

          <div class="my-4">
            <label class="form-label">Web Space(in GB)</label>
            <input name="webSpace" type="text" class="form-control">
            <h6 class='text-muted'>Enter 0.5 for 512MB</h6>
          </div>
          <div class="my-4">
            <label class="form-label">Bandwidth(in GB)</label>
            <input name="bandwidth" type="text" class="form-control">
            <h6 class='text-muted'>Enter 0.5 for 512MB</h6>
          </div>
          <div class="my-4">
            <label class="form-label">Free domain</label>
            <input name="domain" type="text" class="form-control">
            <h6 class='text-muted'>Enter 0 if no domain available in this service</h6>
          </div>
          <div class="my-4">
            <label class="form-label">Language/Technology Support</label>
            <input name="support" type="text" class="form-control">
            <h6 class='text-muted'>Separate by (,) Ex: PHP, MySQL, MongoDB</h6>
          </div>
          <div class="my-4">
            <label class="form-label">MailBox</label>
            <input name="mailbox" type="text" class="form-control">
            <h6 class='text-muted'>Enter Number of mailbox will be provided, enter 0 if none</h6>
          </div>

          <!-- <textarea name="link" class='mb-3' name="textArea" id="textArea" cols="20" rows="10"></textarea> -->
          <button name="submit" type="submit" class="btn btn-block btn-primary mt-3">Create</button>
        </form>
        </div>
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

