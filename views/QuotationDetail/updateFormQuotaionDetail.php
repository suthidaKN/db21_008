<form method="get" action="">

    <label>เลขใบสั่งซื้อ <input type="text" name="QID" 
    value="<?php echo $QuotationDetail->QID; ?>"/></label><br>
    <label>สินค้า    <select name="productID">
        <?php foreach($product_list as $p)
        {
             echo "<option value=$p->productID";
             if($QuotationDetail->productID==$p->productID) {echo " selected='selected'";}
             echo "> $p->productName </option>";
        }
        ?>
    </select></label><br>
    <label>สี <select name="productColorID">
        <?php foreach($productColor_list as $p)
        {
             echo "<option value=$p->productColorID";
             if($QuotationDetail->productColorID==$p->productColorID) {echo " selected='selected'";}
             echo "> $p->color</option>";
        }
        ?>
    </select></label><br>
    <label>จำนวน <input type="text" name="Qty"
    value="<?php echo $QuotationDetail->Qty; ?>"/></label><br>
    <label>จำนวนสีสกรีน <input type="text" name="printColor"
    value="<?php echo $QuotationDetail->printColor; ?>"/></label><br>

    <input type="hidden" name="controller" value="QuotationDetail"/><br>
    <input type="hidden" name="QD_ID" value="<?php echo $QuotationDetail->QD_ID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">Update</button>

</form>