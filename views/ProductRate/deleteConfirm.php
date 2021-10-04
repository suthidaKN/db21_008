<?php echo "<br> Are you sure to delete this ProductRate $ProductRate->PID $ProductRate->PName  <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="ProductRate" />
    <input type="hidden" name="PrID" value="<?php echo $ProductRate->PrID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>

</form>