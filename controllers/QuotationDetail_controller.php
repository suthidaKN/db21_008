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
        $productColorID =$_GET['productColorID'];
        $Qty = $_GET['Qty'];
        $printColor = $_GET['printColor'];
        $QID = $_GET['QID'];
        QuotationDetail::Add($QID,$Qty,$printColor,$productColorID);
        QuotationDetailController :: index();

    }
    public function search(){
        $key = $_GET['key'];
        $QuotationDetail_list = QuotationDetail::search($key);
        require_once("./views/QuotationDetail/index_QuotationDetail.php");
    }
    public function updateForm(){
        echo "bbbb";
        $QID = $_GET['QID'];
        $QuotationDetail_list = QuotationDetail::get($QID);
        $Quotation = Quotation::getAll();
        $product_list = product::getAll();
        $productColor_list = productColor::getAll();
        require_once("./views/QuotationDetail/updateFormQuotaionDetail.php");
  
    }

    public function update(){
        echo "aaaa";
        $productColorID =$_GET['productColorID'];
        $Qty = $_GET['Qty'];
        $printColor = $_GET['printColor'];
        $QID = $_GET['QID'];
        QuotationDetail::update($QID,$Qty,$printColor,$productColorID);
        QuotationDetailController :: index();
    }
}
?>