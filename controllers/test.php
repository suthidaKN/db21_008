$QID = $_GET['QID'];
        $date = $_GET['date'];
        $empID = $_GET['empID'];
        $cusID = $_GET['cusID'];
        $paymentTerm = $_GET['paymentTerm'];
        $Deposit = $_GET['Deposit'];
        Quotation::add($QID,$date,$empID,$cusID,$paymentTerm,$Deposit);
        QuotationController::index();