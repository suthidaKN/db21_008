<?php
class ProductRateController{

    public function index()
    {
        $ProductRate_list = ProductRate::getAll();
        require_once("./views/ProductRate/index_Product.php");
    }

    public function newProductRate(){
        $product_list = Product::getAll();
        require_once("./views/ProductRate/newProductRate.php");
    }

    public function addProductRate(){
        $productID =$_GET['productID'];
        $Qty = $_GET['Qty'];
        $Price = $_GET['Price'];
        $ScreenPrice = $_GET['ScreenPrice'];
        ProductRate::Add($productID,$Qty,$Price,$ScreenPrice);
        ProductRateController::index();
    }


}
?>