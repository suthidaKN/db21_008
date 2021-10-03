<form method = "get" action="">
<label>เลขใบสั่งซื้อ    <input type="text" name="QID" 
value="<?php echo $Quotation->QID; ?>"/></label><br>
<label>วันที่      <input type="date" name="date" 
value="<?php echo date("Y-m-d",strtotime($Quotation->date));?>"/></label><br>
<label>พนักงาน
        <select name="empID">
            <?php
            foreach ($employee_list as $employee) {
                echo "<option value=$employee->empID";
                if ($Quotation->empID== $employee->empID) {
                    echo " selected='selected'";
                }
                echo ">$employee->empName</option>";
            } ?></select></label><br>

    <label>ลูกค้า
        <select name="cusID">
            <?php
            foreach ($customer_list as $customer) {
                echo "<option value=$customer->cusID";
                if ($Quotation->cusID == $customer->cusID) {
                    echo " selected='selected'";
                }
                echo ">$customer->cusName</option>";
            } ?> </select></label><br>

<label>รูปแบบการชำระเงิน   <input type="text" name="paymentTerm"
value="<?php echo $Quotation->paymentTerm;?>"/></label><br>
<label>เปอร์เซ็นต์มัดจำ      <input type="text" name="Deposit"
value="<?php echo $Quotation->Deposit;?>"/></label><br>
    
<input type="hidden" name="controller" value="Quotation"/><br>
<input type="hidden" name="QID" value="<?php echo $Quotation->QID; ?>" />
<button type="submit" name="action" value="index">Back</button>
<button type="submit" name="action" value="updateQuotation">update</button>

</form>