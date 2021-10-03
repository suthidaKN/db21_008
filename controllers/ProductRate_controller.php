<?php
class ProductRateController{

    public function index()
    {
        $ProductRate_list = ProductRate::getAll();
        require_once("./views/ProductRate/index_Product.php");
    }

}
?>