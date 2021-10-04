<?php echo "<br> Are you sure to delete this QuotationDetail $QuotationDetail->QID $QuotationDetail->productName  <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="QuotationDetail" />
    <input type="hidden" name="QD_ID" value="<?php echo $QuotationDetail->QD_ID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>

</form>