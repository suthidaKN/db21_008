<table border = 1 >
<tr> 

    <td>PID</td>

    <td>PName</td>

    <td>Qty</td>

    <td>Price</td>

    <td>ScreenPrice</td>

    <td>Update</td>

    <td>Delete</td>

</tr>

<?php foreach($ProductRate_list as $ProductRate)

{

    echo "<tr><td>$ProductRate->PID</td>

    <td>$ProductRate->PName</td>

    <td>$ProductRate->Qty</td>

    <td>$ProductRate->Price</td>

    <td>$ProductRaten->ScreenPrice</td>

    <td>Update</td>

    <td>Delete</td>

    </tr>";

}

echo "</table>";

?>