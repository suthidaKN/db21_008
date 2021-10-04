<form method = "get" action = "">

    <label>สินค้า    <select name="productID">
        <?php foreach($product_list as $p)
        {
             echo "<option value=$p->productID";
             if($ProductRate->PID==$p->productID) {echo " selected='selected'";}
             echo "> $p->productName </option>";
        }
        ?>
    </select></label><br>
    <label>จำนวน <input type="text" name="Qty"
    value="<?php echo $ProductRate->Qty; ?>"/></label><br>
    <label>ราคา<input type="text" name="Price" 
    value="<?php echo $ProductRate->Price; ?>"/></label><br>
    <label>ราคาสีสกรีน<input type="text" name="ScreenPrice" 
    value="<?php echo $ProductRate->ScreenPrice; ?>"/></label><br>
    

    <input type="hidden" name="controller" value="ProductRate"/><br>
    <input type="hidden" name="PrID" value="<?php echo $ProductRate->PrID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addProductRate">Save</button>
</form>