<table border = 1 >
<tr> 

    <td>QID</td>
    <td>productName</td>
    <td>productColor</td>
    <td>Qty</td>
    <td>prinColor</td>
</tr>

<?php foreach($QuotationDetail_list as $QuotationDetail)

{

    echo "<tr><td>$QuotationDetail->QID</td>

    <td>$QuotationDetail->productName</td>

    <td>$QuotationDetail->productColor</td>

    <td>$QuotationDetail->Qty</td>

    <td>$QuotationDetail->prinColor</td>

    <td>Update</td>

    <td>Delete</td>

    </tr>";

}

echo "</table>";

?>