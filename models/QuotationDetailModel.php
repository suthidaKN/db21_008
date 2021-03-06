<?php
class QuotationDetail{
    public $QID;
    public $productName;
    public $productColor;
    public $productID;
    public $productColorID;
    public $Qty;
    public $printColor;
    public $QD_ID;

    public function __construct($QID,$productName,$productColor,$Qty,$printColor,$productID,$productColorID,$QD_ID)
    {
        $this->QD_ID=$QD_ID;
        $this->QID=$QID;
        $this->productName=$productName;
        $this->productColor=$productColor;
        $this->Qty=$Qty;
        $this->printColor=$printColor;
        $this->productColorID=$productColorID;
        $this->productID=$productID;
    }

    public static function getAll(){
        $QuotationDetailList = [];
        require("./connection_connect.php");
        $sql ="SELECT * FROM QuotationDetail natural join Quotation natural join Product natural join ProductColor";
        $result = $conn->query($sql);
        while($my_rom = $result->fetch_assoc()){
            $QID = $my_rom[QID];
            $productName = $my_rom[productName];
            $productColor = $my_rom[color];
            $Qty = $my_rom[Qty];
            $printColor = $my_rom[printColor];
            $productColorID = $my_rom[productColorID];
            $productID = $my_rom[productID];
            $QD_ID = $my_rom[QD_ID];
            $QuotationDetailList[]=new QuotationDetail($QID,$productName,$productColor,$Qty,$printColor,$productID,$productColorID,$QD_ID);
        }
        require("./connection_close.php");
        return $QuotationDetailList;
    }
    public static function Add($QID,$Qty,$printColor,$productColorID){
        require("./connection_connect.php");

        $sql = "INSERT INTO `QuotationDetail` (`QD_ID`, `productColorID`, `Qty`, `printColor`, `QID`)
         VALUES (NULL, '$productColorID', '$Qty', '$printColor', '$QID')";

        $result = $conn->query($sql);
        require("./connection_close.php");
        return "add success $result rows ";
    }
    
    public static function search($key){
        $QuotationDetailList = [];
        require("./connection_connect.php");
        $sql ="SELECT * from QuotationDetail natural join Quotation natural join Product natural join ProductColor 
        where ProductColor.productColorID = QuotationDetail.productColorID AND ProductColor.productID = Product.productID AND Quotation.QID = QuotationDetail.QID 
        AND (Quotation.QID LIKE '%$key%' or QuotationDetail.Qty LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_rom = $result->fetch_assoc()){

            $QID = $my_rom[QID];
            $productName = $my_rom[productName];
            $productColor = $my_rom[color];
            $Qty = $my_rom[Qty];
            $printColor = $my_rom[printColor];
            $productColorID = $my_rom[productColorID];
            $productID = $my_rom[productID];
            $QuotationDetailList[]=new QuotationDetail($QID,$productName,$productColor,$Qty,$printColor,$productID,$productColorID,$QD_ID);
        }
        require("./connection_close.php");
        return $QuotationDetailList;
    }
    public static function get($QID){


        require("./connection_connect.php");
        $sql ="SELECT * FROM QuotationDetail natural join Quotation natural join Product natural join ProductColor  where ProductColor.productColorID = QuotationDetail.productColorID AND ProductColor.productID = Product.productID AND Quotation.QID = QuotationDetail.QID 
        and QuotationDetail.QD_ID = '$QID'";
        $result = $conn->query($sql);
        $my_rom = $result->fetch_assoc();
        $QID = $my_rom[QID];
        $productName = $my_rom[productName];
        $productColor = $my_rom[color];
        $Qty = $my_rom[Qty];
        $printColor = $my_rom[printColor];
        $productColorID = $my_rom[productColorID];
        $productID = $my_rom[productID];
        $QD_ID = $my_rom[QD_ID];
        require("./connection_close.php");
        return new QuotationDetail($QID,$productName,$productColor,$Qty,$printColor,$productID,$productColorID,$QD_ID);
    }

    public static function update($QID,$Qty,$printColor,$productColorID){
        require("./connection_connect.php");
        $sql = "UPDATE `QuotationDetail` SET `productColorID` = '$productColorID', `Qty` = '$Qty'
        , `printColor` = '$printColor' WHERE `QuotationDetail`.`QD_ID` = '$QID'";

        $result = $conn->query($sql);

        require("connection_close.php");

        return "Update Success $result row";
    }

    public static function delete($QID)
    {
        require_once("./connection_connect.php");
        $sql = "DELETE FROM `QuotationDetail` WHERE `QuotationDetail`.`QD_ID` = $QID";
        $result = $conn->query($sql);
        require("./connection_close.php");

        return "delete success $result row";
    }


    
}