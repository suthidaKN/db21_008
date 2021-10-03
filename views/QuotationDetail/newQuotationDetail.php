<form method="get" action="">
    <label>รหัสใบสินค้า <input type="text" name="QID" /></label><br>
    <label>ชื่อสินค้า <select name="productID">
        <?php foreach($product_list as $product){echo "<option value = $product->productID > $product->productName </option>";} ?>
    </select></label>
    <label>สี <select name="productColorID">
        <?php foreach($productColor_list as $productColor){echo "<option value = $productColor->productColorID > $productColor->color </option>";} ?>
    </select></label><br>
    <label>จำนวน <input type="text" name="Qty"/></label><br>
    <label>จำนวนสีสกรีน <input type="text" name="prinColor"/></label><br>

    <input type="hidden" name="controller" value="QuotationDetail"/>
    <button type="submit" name="action" value="index" >Back</button>
    <button type="submit" name="action" value="addQuotationDetail">Save</button>
</form>