<table border = 1 >

<tr> 

    <td>QID</td>

    <td>Date</td>

    <td>Employee</td>

    <td>Customer</td>

    <td>paymentTerm</td>

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

    <td>Update</td>

    <td>Delete</td>

    </tr>";

}

echo "</table>";

?>