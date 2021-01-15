<?php include_once 'Product.php'; ?>


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
                  <li class="breadcrumb-item active" aria-current="page">Create Category</li>
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
        <form action="insertCategory.php" method="post">
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
      </div>


      

      <table class="table bg-white mt-5" id="myTable">
        <thead>
          <tr>
            <th>#Id</th>
            <th></th>
            <th>Parent Id</th>
            <th></th>
            <th>Prod Name</th>
            <th></th>
            <th>Link</th>
            <th></th>
            <th>Availability</th>
            <th></th>
            <th>Launch Date</th>
            <th></th>
            <th class="text-danger">Action</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $obj = new Product();
          $data1=$obj->selectQuery();
          if($data1!=false){
            foreach($data1 as $key=>$val){
              echo "<tr>";
              echo "<td>".$val['id']."<td>";
              echo "<td>".$val['prod_parent_id']."<td>";
              echo "<td>".$val['prod_name']."<td>";
              echo "<td>".$val['link']."<td>";
              echo "<td>".$val['prod_available']."<td>";
              echo "<td>".$val['prod_launch_date']."<td>";
              echo "<td><button data-toggle='modal' data-id=".$val['id']." data-target='#myModal' class='btn btn-info'>Edit</button>";
              echo "<a href='delCategory.php?id=$val[id]'><button type='submit' class='btn btn-danger'>Delete</button></a><td>";
              echo "</tr>";
            }
            // echo "<pre>";
            // print_r($data1);
          }
          ?>
        </tbody>
      </table>


<!-- table display -->
<div class="col-md-4">
    <!-- Modal -->
    <div class="container">
        
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
              <a class="navbar-brand" href="">CED HOSTING</a>

                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <h4 class="modal-title" id="show">CATEGORY UPDATE</h4>
              </div>
              <div class="modal-body" id="display">
                <form action="updateCategory.php" method="post">
                  <h3 class="navbar-heading p-0 text-muted text-center">
                    <span class="docs-normal">UPDATION HOSTING CATEGORY</span>
                  </h3>
                  <hr class="my-3">
                  <div class="mb-3">
                    <label class="form-label">Hosting</label>
                    <input type="text" class="form-control" value="Hosting" disabled>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Create Category</label>
                    <input id="category" name="category" type="text" class="form-control" value='<?php echo $val['prod_name'] ?>'>
                  </div>
                  <textarea name="link" class='mb-3' name="textArea" id="textArea" cols="20" rows="10" value='hey'></textarea>
                  <button onclick="updatefn()" type="button" class="btn btn-block btn-primary mt-3">UPDATE</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" name="submit" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
    <!-- Modal -->
    
  </div>
</div>
    


<?php include 'footer.php' ?>



<script>

// for Tiny html textarea

    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });

// for data table
  $(document).ready( function () {
    $('#myTable').DataTable();
  });


  $("button").on("click", function(){
    var prodId =  $(this).data('id');
    $('#show').html = prodId;
  })
  // var prodId = $(this).data('id');
  //   console.log("hello ",prodId);
// modal ajax for update
  function updatefn(){
    var category = $('#category');
    var prodId = $(this).data("id");
    console.log(prodId);
    $.ajax({
      url:'updateCategory.php',
      method:'POST',
      data:{
        category:category.val(),
        prodId:prodId,
      },
      success:function(data){
        alert(data);
      }

    });
  }
  
</script>