<!-- Insertion to tbl_product -->
<?php
    include_once 'Product.php';

  if(isset($_POST['submit'])){
    $category = $_POST['category'];
    $link = $_POST['link'];

    $ins = new Product();
    $disp = $ins->insertQuery($category,$link);

    echo "<script>alert('$disp')</script>";

    header("refresh:0; url=createCategory.php");
  }
?>