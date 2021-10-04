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
        $QID = $_GET['QID'];
        $QuotationDetail = QuotationDetail::get($QID);
        $product_list = product::getAll();
        $productColor_list = productColor::getAll();
        require_once("./views/QuotationDetail/updateFormQuotaionDetail.php");
  
    }

    public function update(){
        $productColorID =$_GET['productColorID'];
        $Qty = $_GET['Qty'];
        $printColor = $_GET['printColor'];
        $QID = $_GET['QD_ID'];
        QuotationDetail::update($QID,$Qty,$printColor,$productColorID);
        QuotationDetailController :: index();
    }

    public function deleteConfirm()
    {
        $QID = $_GET['QID'];
        $QuotationDetail = QuotationDetail::get($QID);
        require_once("./views/QuotationDetail/deleteConfirm.php");
    }

    public function delete()
    {
        
        $QID = $_GET['QD_ID'];
        QuotationDetail::delete($QID);
        QuotationDetailController::index();
    }




}
?>