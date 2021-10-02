<form method = "get" action = "">

    <label>เลขใบสั่งซื้อ    <input type="text" name="QID"/></label><br>

    <label>วันที่      <input type="date" name="date" ></label><br>
    
    <label>รหัสพนักงาน    <select name="empID">
        <?php foreach($employee_list as $employee)
        {
             echo "<option value=$employee->empID > $employee->empName</option>";
        }
        ?>
    </select></label><br>

    <label>รหัสลูกค้า<select name="cusID">
        <?php foreach($customer_list as $customer)
         {
             echo "<option value=$customer->cusID > $customer->cusName</option>";
         }?>
    </select></label><br>

    <label>รูปแบบการชำระเงิน   <input type="text" name="paymentTerm"/></label><br>
    <label>เปอร์เซ็นต์มัดจำ      <input type="text" name="Deposit"/></label><br>
    

    <input type="hidden" name="controller" value="Quotation"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addQuotation">Save</button>
</form>