<?php
    ob_start();

    
    include_once __DIR__."/../controller/product_controller.php";

    $productController = new ProductController();
    $id = $_POST['id'];

    $confirm=$productController->getProductId($id);
    $confirmCustomize=$productController->getCustomizeProductId($id);

    if(!$confirm && !$confirmCustomize)
    {

    }
    else{
        
    }

    $result = $productController->deleteProducts($id);

    if($result){
        echo "success";
    }else{
       echo "unsuccess";
    }
?>