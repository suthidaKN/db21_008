<div Align ="Center">
<!DOCTYPE html>

<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}


<table style="width:80%">
    <tr bgcolor = "lightblue">
        <td>QID</td>
        <td>date</td>
        <td>empID</td>
        <td>cusID</td>
        <td>paymentTerm</td>
        <td>Update</td>
        <td>Delete</td>
    </tr>

<?php 
foreach($Quotation_List as $Quotation)
{
    echo "<tr>
        <td>$Quotation->QID</td>
        <td>$Quotation->date</td>
        <td>$Quotation->empID</td>
        <td>$Quotation->cusID</td>
        <td>$Quotation->paymentTerm</td>
        <td><a href=?controller=index_Quotation&action=update&Q_ID=$Quotation->ID>Update</a></td>
        <td><a href=?controller=index_Quotation&action=delete&Q_ID=$Quotation->ID>Delete</a></td>
    </tr>";
}
echo "</table>";
?>
</body>
</html>
</div>