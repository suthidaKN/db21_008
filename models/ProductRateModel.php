<?php
class ProductRate
{
   public $PID;
   public $PName;
   public $Qty;
   public $Price;
   public $ScreenPrice;
   public $PrID; //รันเอง

   public function __construct($PID,$PName,$Qty,$Price,$ScreenPrice,$PrID)
   {
    $this->PID = $PID;
    $this->PName = $PName;
    $this->Qty = $Qty;
    $this->Price = $Price;
    $this->ScreenPrice = $ScreenPrice;
    $this->PrID = $PrID;
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
            $ScreenPrice = $row[screenColor];
            $PrID = $row[pricingID];
            $ProductRateList[] = new ProductRate($PID,$PName,$Qty,$Price,$ScreenPrice,$PrID);
        }
        require("connection_close.php");

        return $ProductRateList;
    }

    public static function Add($productID,$Qty,$Price,$ScreenPrice){
        require("./connection_connect.php");

        $sql = "INSERT INTO `Pricing` (`pricingID`, `Qty`, `Qty(vc)`, `price`, `screenColor`, `productID`) 
        VALUES (NULL, '$Qty','$Qty', '$Price', '$ScreenPrice', '$productID')";

        $result = $conn->query($sql);
        require("./connection_close.php");
        return "add success $result rows ";
    }

    public static function get($PID){


        require("./connection_connect.php");
        $sql ="SELECT * FROM Pricing NATURAL JOIN Product 
        where  Pricing.productID = Product.productID and Pricing.pricingID = '$PID'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $PID = $row[productID];
        $PName = $row[productName];
        $Qty = $row[Qty];
        $Price = $row[price];
        $ScreenPrice = $row[screenColor];
        $PrID = $row[pricingID];

        require("./connection_close.php");
        return new ProductRate($PID,$PName,$Qty,$Price,$ScreenPrice,$PrID);
    }

    public static function update($PrID,$productID,$Qty,$Price,$ScreenPrice){
        require("./connection_connect.php");
        $sql = "UPDATE `Pricing` SET `Qty` = '$Qty', `Qty(vc)` = '$Qty',
         `price` = '$Price', `screenColor` = '$ScreenPrice', `productID` = '$productID' WHERE `Pricing`.`pricingID` = '$PrID'";

        $result = $conn->query($sql);

        require("connection_close.php");

        return "Update Success $result row";
    }

    public static function search($key){
        $ProductRateList = [];
        require("./connection_connect.php");
        $sql ="SELECT * from Pricing NATURAL JOIN Product
        where Pricing.productID = Product.productID 
        AND (Pricing.productID LIKE '%$key%' or Product.productName LIKE '%$key%' )";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $PID = $row[productID];
            $PName = $row[productName];
            $Qty = $row[Qty];
            $Price = $row[price];
            $ScreenPrice = $row[screenColor];
            $PrID = $row[pricingID];
            $ProductRateList[] = new ProductRate($PID,$PName,$Qty,$Price,$ScreenPrice,$PrID);
        }
        require("./connection_close.php");
        return $ProductRateList;
    }

    public static function delete($PrID)
    {
        require_once("./connection_connect.php");
        $sql = "DELETE FROM `Pricing` WHERE `Pricing`.`pricingID` = '$PrID' ";
        $result = $conn->query($sql);
        require("./connection_close.php");

        return "delete success $result row";
    }
    


}