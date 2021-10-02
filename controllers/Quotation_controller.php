<?php
class QuotationController
{

    public function index_Quotation()
    {
        $Quotation_List = Quotation::getAll();
        require_once("./views/Quotation/index_Quotation.php");
    }
}
?>