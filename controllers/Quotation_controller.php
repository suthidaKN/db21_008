<?php
class QuotationController
{
    public function index()
    {
        $Quotation_list = Quotation::getAll();
        require_once("./views/Quotation/index_Quotation.php");
    }

    public function newQuotation()
    {
        $quotation_list = Quotation::getAll();
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
        require_once("./views/Quotation/newQuotation.php");
    }

    public function addQuotation()
    {
        $QID = $_GET['QID'];
        $date = $_GET['date'];
        $empID = $_GET['empID'];
        $cusID = $_GET['cusID'];
        $paymentTerm = $_GET['paymentTerm'];
        $Deposit = $_GET['Deposit'];
        Quotation::add($QID,$date,$empID,$cusID,$paymentTerm,$Deposit);
        QuotationController::index();
    }
}
?>