<?php

    include_once 'oopDbConn.php';

    class Product extends Dbcon{
        public $prodCat;
        public $prodName;
        public $url;
        public $mPrice;
        public $aPrice;
        public $sku;
        public $webSpace;
        public $bandwidth;
        public $domain;
        public $support;
        public $mailbox;
        public $id;
        public $category;
        public $prodCatId;



      // Query for description of addProduct.php
        public function insertAddProdDescQuery($prodCatId, $mPrice, $aPrice, $sku, $description){
            $sql = "INSERT INTO `tbl_product_description`(prod_id, description, mon_price, annual_price, sku) VALUES ($prodCatId, '$description', '$mPrice','$aPrice', '$sku')";
            if ($this->conn->query($sql) === TRUE) {
                return "New record created successfully";
              } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
              }
              // return $prodName;
        }


      // Query for ProdName and url of addProduct.php
        public function insertAddProdQuery($prodCatId,$prodName, $url){
          $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`) VALUES ($prodCatId, '$prodName', '$url', 1)";
          if ($this->conn->query($sql) === TRUE) {
              return "New record created successfully";
            } else {
              return "Error: " . $sql . "<br>" . $this->conn->error;
            }
      }


      // Query for createCategory.php
        public function selectQuery() {
            $sql = "SELECT * FROM `tbl_product`";
            $result = $this->conn->query($sql);
            $arr=array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($arr,$row);
                }
            }
            return $arr;
        }

      // Query for createCategory.php
        public function insertQuery($category, $link){
            $sql = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`) VALUES (1, '$category', '$link', 1)";
            if ($this->conn->query($sql) === TRUE) {
                return "New record created successfully";
              } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
              }
        }


       
      // Query for Delete of delCategory.php
        public function deleteQuery($id){
            $sql = "DELETE FROM `tbl_product` WHERE id='$id'";
            if ($this->conn->query($sql) === TRUE) {
                return "Record deleted successfully";
              } else {
                return "Error deleting record: " . $this->conn->error;
              }
        }

      // Query for Update of updateCategory.php
        public function updateQuery($category,$id){
            $sql = "UPDATE `tbl_product` SET prod_name='$category' WHERE id='$id'";
            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return "Error updating record: " . $this->conn->error;
            }
        }


      
      // Query for Select of viewProduct.php
      public function viewProdQuery(){
        $sql = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON tbl_product.prod_parent_id = tbl_product_description.prod_id";
        $result = $this->conn->query($sql);
        $arrDesc=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($arrDesc,$row);
            }
        }
        return $arrDesc; 
      }


      public function selectDescQuery() {
        $sql = "SELECT * FROM `tbl_product_description`";
        $result = $this->conn->query($sql);
        $arr=array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($arr,$row);
            }
        }
        return $arr;
    } 
    }

?>