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
        //echo "getAll";
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
        //echo "sql1=$sql"
        require("connection_connect.php");
        $sql = "INSERT INTO `Quotation`(`QID`,`date`,`empID`,`cusID`,`paymentTerm`,`Deposit`) VALUES ('$QID','$date','$empID','$cusID','$paymentTerm','$Deposit')";
        echo "$QID,$date,$empID,$cusID,$paymentTerm,$Deposit";
        $result = $conn->query($sql);
        require("connection_close.php");
        
        return ;
    }

    public static function search($key)
    {
        //echo "123";
        $QuotationList = [];
         require("connection_connect.php");
         $sql = "SELECT * FROM Quotation
         NATURAL JOIN Employee
         NATURAL JOIN Customer 
         WHERE Quotation.empID = Employee.empID AND Quotation.cusID = Customer.cusID 
         AND (Quotation.QID LIKE '%$key%' OR Customer.cusName LIKE '%$key%' OR Employee.empID LIKE '%$key%'
         OR Employee.empName LIKE '%$key%')";
         //echo "sql=$sql";
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
    public static function get($QID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM Quotation NATURAL JOIN Employee NATURAL JOIN Customer
        where Quotation.empID = Employee.empID and Quotation.cusID = Customer.cusID and Quotation.QID = '$QID' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $QID = $row[QID];
        $date = $row[date];
        $empID = $row[empID];
        $cusID = $row[cusID];
        $paymentTerm = $row[paymentTerm];
        $empName = $row[empName];
        $cusName = $row[cusName];
        $Deposit = $row[Deposit];
    
        require("connection_close.php");

        return new Quotation($QID,$date,$empID,$cusID,$paymentTerm,$cusName,$empName,$Deposit);
    }
    
    public static function update($QID,$date,$empID,$cusID,$paymentTerm,$Deposit)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Quotation` SET `date` = '$date', `empID` = '$empID', `cusID` = '$cusID', `paymentTerm` = '$paymentTerm', 
        `Deposit` = '$Deposit' WHERE `Quotation`.`QID` = '$QID'";
        $result = $conn->query($sql);

        require("connection_close.php");

        return "Update Success $result row";
    }

    public static function delete($QID)
    {
        require_once("connection_connect.php");
        $sql = "DELETE from Quotation WHERE QID='$QID'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result row";
    }
}
?>