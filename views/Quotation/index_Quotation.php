<table border = 1 >
<tr> <td>QID</td><td>Date</td><td>Employee</td><td>Customer</td><td>paymentTerm</td></tr>
<?php foreach($Quotation_list as $Quotation)
{
    echo "<tr><td>$Quotation->QID</td>
    <td>$Quotation->date</td>
    <td>$Quotation->emp</td>
    <td>$Quotation->cus</td>
    <td>$Quotation->paymentT</td>
    <td>Update</td>
    <td>Delete</td>
    </tr>";
}
echo "</table>";
?>