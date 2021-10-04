<form method = "get" action = "">

    <label>สินค้า    <select name="productID">
        <?php foreach($product_list as $product)
        {
             echo "<option value=$product->productID> $product->productName </option>";
        }
        ?>
    </select></label><br>
    <label>จำนวน<input type="text" name="Qty" ></label><br>
    <label>ราคา<input type="text" name="Price" ></label><br>
    <label>ราคาสีสกรีน<input type="text" name="ScreenPrice" ></label><br>
    

    <input type="hidden" name="controller" value="ProductRate"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addProductRate">Save</button>
</form>