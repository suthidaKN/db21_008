<form method="get" action="">

    <label>รหัสใบสินค้า <input type="text" name="QID" 
    value="<?php echo $QuotationDetail->QID; ?>"/></label><br>
    <label>สินค้า    <select name="productID">
        <?php foreach($product_list as $p)
        {
             echo "<option value=$p->productID";
             if($p->productID==$product->productID) {echo " selected='selected'";}
             echo "> $product->productName </option>";
        }
        ?>
    </select></label><br>
    <label>สี <select name="productColorID">
        <?php foreach($productColor_list as $p)
        {
             echo "<option value=$product->productColorID";
             if($p->productColorID==$productColor->productColorID) {echo " selected='selected'";}
             echo "> $product->color</option>";
        }
        ?>
    </select></label><br>
    <label>จำนวน <input type="text" name="Qty"
    value="<?php echo $QuotationDetail->Qty; ?>"/></label><br>
    <label>จำนวนสีสกรีน <input type="text" name="printColor"
    value="<?php echo $QuotationDetail->printColor; ?>"/></label><br>

    <input type="hidden" name="controller" value="QuotationDetail"/><br>
    <input type="hidden" name="QID" value="<?php echo $QuotationDetail->QID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="update">update</button>

</form>