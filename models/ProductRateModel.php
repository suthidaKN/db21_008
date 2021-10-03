<?php
class ProductRate
{
   public $PID;
   public $PName;
   public $Qty;
   public $Price;
   public $ScreenPrice;

   public function __construct($PID,$PName,$Qty,$Price,$ScreenPrice)
   {
    $this->PID = $PID;
    $this->PName = $PName;
    $this->Qty = $Qty;
    $this->Price = $Price;
    $this->ScreenPrice = $ScreenPrice;
    }

    public static function getAll()
    {
        $ProductRateList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Pricing NATURAL JOIN Product";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $PID = $row[productID];
            $PName = $row[productName];
            $Qty = $row[Qty];
            $Price = $row[price];
            $ScreenPrice = $row[ScreenColr];
            $ProductRateList[] = new ProductRate($PID,$PName,$Qty,$Price,$ScreenPrice);
        }
        require("connection_close.php");

        return $ProductRateList;
    }


}