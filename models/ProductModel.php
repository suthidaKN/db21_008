<?php
class product{
    public $productID;
    public $productName;


    public function __construct($productID,$productName)
    {
        $this->productID = $productID;
        $this->productName=$productName;
  
    }
    
    public static function getAll(){
        $productList = [];
        require("./connection_connect.php");
        $sql ="SELECT * FROM Product";
        $result = $conn->query($sql);
        while($my_rom = $result->fetch_assoc()){
            $productID = $my_rom[productID];
            $productName = $my_rom[productName];
            $productList[]= new product($productID,$productName);
            
            
        }
        require("./connection_close.php");
        return $productList;
    }
}
?>