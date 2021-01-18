<?php //session_start(); ?>
<?php include_once 'header.php' ?>

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
            $cart = $_SESSION['cart'];
            foreach($cart as $key=>$val){
              echo "<tr>";
              foreach($val as $key1=>$val1){
                echo "<td>".$val1."<td>";
              }
              echo "<td><a href='delCart.php'><button class='btn btn-danger'>DELETE</button></a>";
              echo "</tr>";
            }
            // $count = count($cart);
            // echo $count;
          ?>
        </tbody>
      </table>
</div>
<div class='p-5'>
  <a href='checkout.php'><button class='btn btn-info btn-block my-5'>CheckOut</button></a>
<div>
<?php include 'footer.php' ?>

