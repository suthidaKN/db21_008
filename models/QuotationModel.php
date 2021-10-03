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
    public $Deposit;


    public function __construct($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName,$Deposit)
    {
        $this->QID = $QID;
        $this->date = $date;
        $this->empID = $empID;
        $this->cusID = $cusID;
        $this->paymentTerm = $paymentTerm;
        $this->empName = $empName;
        $this->cusName = $cusName;
        $this->Deposit = $Deposit;
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
            $Deposit = $row[Deposit];

            $QuotationList[] = new Quotation($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName,$Deposit);
        }
        require("connection_close.php");

        return $QuotationList;
    }

    public static function add($QID,$date,$empID,$cusID,$paymentTerm,$Deposit)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Quotation`(`QID`,`date`,`empID`,`cusID`,`paymentTerm`,`Deposit`) VALUES ('$QID','$date','$empID','$cusID','$paymentTerm','$Deposit')";
        $result = $conn->query($sql);
        require("connection_close.php");
       
        return ;
    }

    public static function search($key)
    {
        $QuotationList = [];
         require("connection_connect.php");
         $sql = "SELECT * FROM Quotation,Employee,Customer WHERE Quotation.empID = Employee.empID AND Quotation.cusID = Customer.cusID 
         AND (Quotation.QID LIKE '%$key%' OR Customer.cusName LIKE '%$key%' OR Employee.empID LIKE '%$key%'
         OR Employee.empName LIKE '%$key%')";
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
            $Deposit = $row[Deposit];

            $QuotationList[] = new Quotation($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName,$Deposit);
        }
        require("connection_close.php");

        return $QuotationList;
    }
}
?>