<?php
    class Quotation
    {   
        public $QID,$date,$emp,$cus,$paymentT;

        public function_construct($QID,$date,$emp,$cus,$paymentT)
        {
            $this -> QID = $QID;
            $this -> date = $date;
            $this -> emp = $emp;
            $this -> cus = $cus;
            $this -> paymentT = $paymentT;
        }

        public static function getAll()
        {
            $QuotationList = [];
            require("concection_connect.php");
            $sql = "SELECT QID,Quotation.date,Employee.empName,Customer.cusName,Quotation.paymentTerm FROM Quotation NATURAL JOIN Employee NATURAL JOIN Customer";
            $result = $conn->query($sql);
            while($my_row = $result -> fetch_assoc())
            {
                $QID = $my_row[QID];
                $date = $my_row[date];
                $emp = $my_row[empID];
                $cus = $my_row[cusID];
                $paymentT = $my_row[paymentTerm];
                $QuotationList[] = new Quotation($QID,$date,$emp,$cus,$paymentT);
            }
            require("connection_close.php");
            return $QuotationList;
        }
    }
?>