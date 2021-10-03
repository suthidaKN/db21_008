<?php
class QuotationDetailController{
    
    public function index(){
        $QuotationDetail_list = QuotationDetail::getAll();
        require_once("./views/QuotationDetail/index_QuotationDetail.php");
    }
}