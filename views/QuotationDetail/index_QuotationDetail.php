<table border = 1 >
    <br>
   new QuotationDetail<a href="?controller=QuotationDetail&action=newQuotationDetail"> Click </a>
   <br>
<form method ="get" action="">
    <input type = "text" name = "key">
    <input type = "hidden" name = "controller" value = "QuotationDetail"/>
    <button type = "submit" name = "action" value = "search">Search</button>
</form>    
<tr> 

    <td>QID</td>
    <td>productName</td>
    <td>productColor</td>
    <td>Qty</td>
    <td>prinColor</td>
    <td>Update</td>
    <td>Delete</td>
</tr>

<?php foreach($QuotationDetail_list as $QuotationDetail)

{

    echo "<tr><td>$QuotationDetail->QID</td>

    <td>$QuotationDetail->productName</td>

    <td>$QuotationDetail->productColor</td>

    <td>$QuotationDetail->Qty</td>

    <td>$QuotationDetail->printColor</td>

    <td><a href='?controller=QuotationDetail&action=updateForm&QID=$QuotationDetail->QD_ID'>Update</a></td>

    <td><a href='?controller=QuotationDetail&action=deleteConfirm&QID=$QuotationDetail->QD_ID'>Delete</a></td>

    </tr>";

}

echo "</table>";

?>