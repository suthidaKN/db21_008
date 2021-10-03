<table border = 1 >

<br>New Quotation <a href="?controller=Quotation&action=newQuotation">Click</a><br>

<form method ="get" action="">
    <input type = "text" name = "key">
    <input type = "hidden" name = "controller" value = "Quotation"/>
    <button type = "submit" name = "action" value = "search">Search</button>
</form>    

<tr> 

    <td>QID</td>

    <td>Date</td>

    <td>Employee</td>

    <td>Customer</td>

    <td>paymentTerm</td>

    <td>Deposit</td>

    <td>Update</td>

    <td>Delete</td>

</tr>

<?php foreach($Quotation_list as $Quotation)

{

    echo "<tr><td>$Quotation->QID</td>

    <td>$Quotation->date</td>

    <td>$Quotation->empName</td>

    <td>$Quotation->cusName</td>

    <td>$Quotation->paymentTerm</td>

    <td>$Quotation->Deposit</td>

    <td>Update</td>

    <td>Delete</td>

    </tr>";

}

echo "</table>";

?>