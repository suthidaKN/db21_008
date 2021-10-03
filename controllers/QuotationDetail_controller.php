<?php
class QuotationDetailController{
    
    public function index(){
        $QuotationDetail_list = QuotationDetail::getAll();
        require_once("./views/QuotationDetail/index_QuotationDetail.php");
    }

    public function newQuotationDetail(){
        $product_list = product::getAll();
        $productColor_list = productColor::getAll();
        require_once("./views/QuotationDetail/newQuotationDetail.php");
    }
    
    
    public function addQuotationDetail(){
        $QID = $_GET['QID'];
        $productID = $_GET['productID'];
        $productColorID =$_GET['productColorID'];
        $Qty = $_GET['Qty'];
        $printColor = $_GET['printColor'];
        QuotationDetail::Add($QID,$Qty,$printColor,$productID,$productColorID);
        QuotationDetailController :: index();

    }
    public function search(){
        $key = $_GET['key'];
        $QuotationDetail_list = QuotationDetail::search($key);
        require_once("./views/QuotationDetail/index_QuotationDetail.php");
    }
}
?>