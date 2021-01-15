<?php
    include 'Product.php';

    $id = $_GET['id'];
    $del = new Product();
    $delete = $del->deleteQuery($id);
    echo "<script>alert('$delete')</script>";

    header("refresh:0; url=createCategory.php");

?>