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
    echo "<tr><td>$Quotation->ID</td>
    <td>$Quotation->d</td>
    <td>$Quotation->e</td>
    <td>$Quotation->c</td>
    <td>$Quotation->p</td>
    <td>Update</td>
    <td>Delete</td>
    </tr>";
}
echo "</table>";
?>