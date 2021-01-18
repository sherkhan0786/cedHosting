<?php
session_start();
    include_once 'adminDash/products/Product.php';

    if(isset($_POST['buyId'])){
        $buyId = $_POST['buyId'];
        $cartObj = new Product();
        $data = $cartObj->selectDescQuery();
        
    }
?>
          <?php
          if($data!=false){
            // $arrCart = array();
            foreach($data as $key=>$val){
              $decode = json_decode($val['description'], true);
              if($val['id'] == $buyId){
              $nArr = array($val['mon_price'], $val['annual_price'], $decode['webSpace'], $decode['bandwidth'], $decode['domain'], $decode['support'], $decode['mailbox']);
            }
          }
          $_SESSION['cart'][] = $nArr;
        }
          ?>