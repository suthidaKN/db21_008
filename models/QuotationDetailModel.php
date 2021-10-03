<?php
class QuotationDetail{
    echo "111!!!!";
    public $QID;
    public $productName;
    public $productColor;
    public $Qty;
    public $prinColor;

    public static function __construct($QID,$productName,$productColor,$Qty,$prinColor)
    {
        $this->QID=$QID;
        $this->productName=$productName;
        $this->productColor=$productColor;
        $this->Qty=$Qty;
        $this->prinColor=$prinColor;
    }

    public static function getAll(){
        echo "!!!!";
        $QuotationDetailList = [];
        require("./connection_connect.php");
        $sql ="SELECT * FROM QuotationDetail ,Quotation,Product,ProductColor";
        $result = $conn->query($sql);
        while($my_rom == $result->fetch_assoc()){
            $QID = $my_rom[QID];
            $productName = $my_rom[productName ];
            $productColor = $my_rom[color];
            $Qty = $my_rom[Qty];
            $prinColor = $my_rom[prinColor];
        }
        require("./connection_close.php");
        return $QuotationDetailList;
    }
}