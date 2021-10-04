<table border = 1 >

<br>New ProductRate <a href="?controller=ProductRate&action=newProductRate">Click</a><br>
<form method ="get" action="">
    <input type = "text" name = "key">
    <input type = "hidden" name = "controller" value = "ProductRate"/>
    <button type = "submit" name = "action" value = "search">Search</button>
</form>  
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

    <td>$ProductRate->ScreenPrice</td>

    <td>[<a href='?controller=ProductRate&action=updateForm&PrID=$ProductRate->PID'>Update</a>]</td>

    <td>[<a href='?controller=ProductRate&action=deleteConfirm&PrID=$ProductRate->PID'>Delete</a>]</td>

    </tr>";

}

echo "</table>";

?>