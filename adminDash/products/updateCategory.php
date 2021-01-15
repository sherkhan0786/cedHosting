<?php
    include_once 'Product.php';


        $category = $_POST['category'];
        $id = $_POST['prodId'];

        $catUpd = new Product();
        echo $catUpd->updateQuery($category,$id);
        // header("location:createCategory.php");
    
?>