<?php
    class Quotation
    {   
        public $QID;
        public $date;
        public $empID;
        public $cusID;
        public $paymentTerm;
        public $Deposit;

        public function_construct($QID,$date,$empID,$cusID,$paymentTerm,$Deposit)
        {
            $this -> QID = $QID;
            $this -> date = $date;
            $this -> emp = $empID;
            $this -> cus = $cusID;
            $this -> paymentT = $paymentTerm;
            $this -> Deposit = $Deposit
        }

        public static function getAll()
        {
            $QuotationList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Quotation ";
            $result = $conn->query($sql);
            while($my_row = $result -> fetch_assoc())
            {
                $QID = $my_row[QID];
                $date = $my_row[date];
                $empID = $my_row[empID];
                $cusID = $my_row[cusID];
                $paymentTerm = $my_row[paymentTerm];
                $Deposit = $my_row[Deposit];
                $QuotationList[] = new Quotation($QID,$date,$empID,$cusID,$paymentTerm,$Deposit);
            }
            require("connection_close.php");
            return $QuotationList;
        }
    }
?>