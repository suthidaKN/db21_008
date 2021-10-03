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

         $QID = $_GET['QID'];
        $date = $_GET['date'];
        $empID = $_GET['empID'];
        $cusID = $_GET['cusID'];
        $paymentTerm = $_GET['paymentTerm'];
        $Deposit = $_GET['Deposit'];
        Quotation::add($QID,$date,$empID,$cusID,$paymentTerm,$Deposit);
        QuotationController::index();

   

}
?>