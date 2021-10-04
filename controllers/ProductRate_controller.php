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

    public function updateForm(){
        $PrID = $_GET['PID'];
        $ProductRate = ProductRate::get($PrID);
        $product_list = product::getAll();
        require_once("./views/ProductRate/updateFormProductRate.php");
  
    }
    public function updateProductRate(){
        $productID =$_GET['productID'];
        $Qty = $_GET['Qty'];
        $Price = $_GET['Price'];
        $ScreenPrice = $_GET['ScreenPrice'];
        $PrID = $_GET['PrID'];
        ProductRate::update($PrID,$productID,$Qty,$Price,$ScreenPrice);
        ProductRateController::index();
    }

    public function search(){
        $key = $_GET['key'];
        $ProductRate_list = ProductRate::search($key) ;
        require_once("./views/ProductRate/index_Product.php");
    }

    public function deleteConfirm()
    {
        $PID = $_GET['PID'];
        $ProductRate = ProductRate::get($PID);
        require_once("./views/ProductRate/deleteConfirm.php");
    }

    public function delete()
    {
        
        $PrID = $_GET['PrID'];
        ProductRate::delete($PrID);
        ProductRateController::index();
    }

    


}
?>