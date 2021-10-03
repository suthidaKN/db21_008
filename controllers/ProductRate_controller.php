<?php
class ProductRateController{

    public function index()
    {
        $ProductRate_list = ProductRate::getAll();
        require_once("./views/ProductRate/index_Product.php");
    }

    public function newProductRate(){
        $Product_list = Product::getAll();
        require_once("./views/productRate/newProductRate.php");
    }

   

}
?>