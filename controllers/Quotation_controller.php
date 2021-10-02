<<?php
    class QuotationController
    {
         public function index()
         {
             $Quotation_list = Quotation::getAll();
             require_once("views/Quotation/index_Quotation.php");
         }   
    }
?>