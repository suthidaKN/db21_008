<?php
class Quotation
{
    public $QID;
    public $date;
    public $empID;
    public $cusID;
    public $paymentTerm;


    public function __construct($QID,$date,$empID,$cusID,$paymentTerm)
    {
        $this->QID = $QID;
        $this->date = $date;
        $this->empID = $empID;
        $this->cusID = $cusID;
        $this->payment = $paymentTerm;
    }

    public static function getAll()
    {
        $QuotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * from Quotation Natural JOIN Customer Natural JOIN Employee ";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $QID = $row[QID];
            $date = $row[date];
            $empID = $row[empID];
            $cusID = $row[cusID];
            $paymentTerm = $row[paymentTerm];
            $QuotationList[] = new Quotation($QID,$date,$empID,$cusID,$paymentTerm);
        }
        require("connection_close.php");

        return $QuotationList;
    }
}
?>