<?php
    include_once 'Product.php';

    if(isset($_POST['submit'])){
        $prodCatId = $_POST['prodCatId'];
        $prodName = $_POST['prodName'];
        $url = $_POST['url'];
        $mPrice = $_POST['mPrice'];
        $aPrice = $_POST['aPrice'];
        $sku = $_POST['sku'];
        $webSpace = $_POST['webSpace'];
        $bandwidth = $_POST['bandwidth'];
        $domain = $_POST['domain'];
        $support = $_POST['support'];
        $mailbox = $_POST['mailbox'];


        // json converting
        $description = array('webSpace'=>$webSpace, 'bandwidth'=>$bandwidth, 'domain'=>$domain, 'support'=>$support, 'mailbox'=>$mailbox);

        $description = json_encode($description);

        $insProd = new Product();
        echo $insProd->insertaddProdQuery($prodCatId, $prodName, $url);

        echo $insProd->insertAddProdDescQuery($prodCatId, $mPrice, $aPrice, $sku, $description);


    }

?>