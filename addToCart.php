<?php
    include_once 'adminDash/products/Product.php';

    if(isset($_POST['buyId'])){
        $buyId = $_POST['buyId'];
        //echo $buyId;

        $cartObj = new Product();
        $data = $cartObj->selectDescQuery();

        // echo "<pre>";
        // print_r($data);
        // echo "hello";
        // echo "</pre>";
        
    }
?>

<div class="table-responsive">
      <table class="table bg-white mt-5" id="myTable">
        <thead>
          <tr>
            
            <th>Monthly Price</th>
            <th></th>
            <th>Annual Price</th>
            <!-- <th></th>
            <th>SKU</th> -->
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
          if($data!=false){
            foreach($data as $key=>$val){
              $decode = json_decode($val['description'], true);
              // echo "<pre>";
              // print_r($decode);
              // echo "</pre>";
              if($val['id'] == $buyId){
              echo "<tr>";
              echo "<td>".$val['mon_price']."<td>";
              echo "<td>".$val['annual_price']."<td>";
              echo "<td>".$decode['webSpace']."<td>";
              echo "<td>".$decode['bandwidth']."<td>";
              echo "<td>".$decode['domain']."<td>";
              echo "<td>".$decode['support']."<td>";
              echo "<td>".$decode['mailbox']."<td>";
              echo "<td><button data-toggle='modal' data-id="./*$val['id'].*/" data-target='#myModal' class='btn btn-info'>Edit</button>";
              echo "<a href='delCategory.php?id=$val[id]'><button type='submit' class='btn btn-danger'>Delete</button></a><td>";
              echo "</tr>";
            }
          }
        }
          ?>
        </tbody>
      </table>
</div>