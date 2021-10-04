<?php
class QuotationController
{
    public function index()
    {
        //echo "QuotationIndex1";
        $Quotation_list = Quotation::getAll();
        //echo "QuotationIndex2";
        require_once("./views/Quotation/index_Quotation.php");
    }

    public function newQuotation()
    {
        $Quotation_list = Quotation::getAll();
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

    public function search()
    {
        //echo "contollerSearch1";
        $key = $_GET['key'];
        $Quotation_list = Quotation::search($key);
        //echo "contollerSearch2";
        require_once("./views/Quotation/index_Quotation.php");
        
    }

    public function updateForm()
    {
        $QID = $_GET['QID'];
        $Quotation = Quotation::get($QID);
        $customer_list = Customer::getAll();
        $employee_list = Employee::getAll();
        require_once("./views/Quotation/updateForm.php");
    }

    public function updateQuotation()
    {
        $QID = $_GET['QID'];
        $date = $_GET['date'];
        $empID = $_GET['empID'];
        $cusID = $_GET['cusID'];
        $paymentTerm = $_GET['paymentTerm'];
        $Deposit = $_GET['Deposit'];
        Quotation::update($QID,$date,$empID,$cusID,$paymentTerm,$Deposit);
        QuotationController::index();
    }

    public function deleteConfirm()
    {
        $QID = $_GET['QD_ID'];
        $Quotation = Quotation::get($QID);
        require_once("./views/Quotation/deleteConfirm.php");
    }

    public function delete()
    {
        $QID = $_GET['QID'];
        Quotation::delete($QID);
        QuotationController::index();
    }
}
?>