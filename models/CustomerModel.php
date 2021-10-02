<?php
class Customer
{
    public $cusID;
    public $cusName;

    public function __construct($cusID,$cusName)
    {
        $this->cusID = $cusID;
        $this->cusName = $cusName;
    }
    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "select * from Customer";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $cusID = $my_row[cusID];
            $cusName = $my_row[cusName];
            $customerList[] = new Customer($cusID, $cusName);
        }
        require("connection_close.php");

        return $customerList;
    }
}
?>