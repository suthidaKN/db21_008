<?php
class Quotation
{
    public $QID;
    public $date;
    public $empID;
    public $cusID;
    public $paymentTerm;
    public $empName;
    public $cusName;


    public function __construct($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName)
    {
        $this->QID = $QID;
        $this->date = $date;
        $this->empID = $empID;
        $this->cusID = $cusID;
        $this->paymentTerm = $paymentTerm;
        $this->empName = $empName;
        $this->cusName = $cusName;
    }

    public static function getAll()
    {
        $QuotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Quotation NATURAL JOIN Employee NATURAL JOIN Customer";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $QID = $row[QID];
            $date = $row[date];
            $empID = $row[empID];
            $cusID = $row[cusID];
            $paymentTerm = $row[paymentTerm];
            $empName = $row[empName];
            $cusName = $row[cusName];

            $QuotationList[] = new Quotation($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName);
        }
        require("connection_close.php");

        return $QuotationList;
    }
}
?>